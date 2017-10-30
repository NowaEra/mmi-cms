<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2016 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace Cms\Model;

use Cms\Orm\CmsCategoryQuery,
    Cms\Orm\CmsCategoryRecord;

/**
 * Model kategorii
 */
class CategoryModel
{

    /**
     * Drzewo kategorii
     * @var array
     */
    private $_categoryTree = [];

    /**
     * Lista kategorii z id jako kluczem
     * @var array
     */
    private $_flatCategories = [];

    /**
     * Konstruktor pobiera kategorie i buduje drzewo
     */
    public function __construct()
    {
        //pobieranie kategorii
        $categories = (new CmsCategoryQuery)
            ->withType()
            ->orderAscOrder()
            ->find()
            ->toObjectArray();
        //budowanie drzewa z płaskiej struktury orm
        $this->_buildTree($this->_categoryTree, [], $categories);
    }

    /**
     * Zwraca drzewo kategorii
     * @param integer $parentCategoryId identyfikator kategorii rodzica (opcjonalny)
     * @return array
     */
    public function getCategoryTree($parentCategoryId = null)
    {
        //brak zdefiniowanej kategorii
        if ($parentCategoryId === null) {
            return $this->_categoryTree;
        }
        //wyszukiwanie kategorii
        return $this->_searchChildren($this->_categoryTree, $parentCategoryId);
    }

    /**
     * Pobiera listę kategorii w postaci płaskiej tabeli z odwzorowaniem drzewa
     * @param integer $parentCategoryId identyfikator kategorii (opcjonalny)
     * @param string $categoryTypeKey filtrowanie po typie kategorii
     * @return array
     */
    public function getCategoryFlatTree($parentCategoryId = null, $categoryTypeKey = null)
    {
        $flatTree = [];
        //budowanie płaskie drzewo
        $this->_buildFlatTree('', $flatTree, $this->getCategoryTree($parentCategoryId), $categoryTypeKey);
        return $flatTree;
    }

    /**
     * Wyszukuje kategorię po ID
     * @param integer $categoryId identyfikator rekordu
     * @return \Cms\Orm\CmsCategoryRecord
     */
    public function getCategoryById($categoryId)
    {
        //wyszukanie w płaskiej liście
        return isset($this->_flatCategories[$categoryId]) ? $this->_flatCategories[$categoryId] : null;
    }

    /**
     * Wyszukiwanie dzieci
     * @param array $categories
     * @param integer $parentCategoryId
     * @return array
     */
    private function _searchChildren(array $categories, $parentCategoryId = null)
    {
        //iteracja po kategoriach
        foreach ($categories as $id => $category) {
            if ($id == $parentCategoryId) {
                return $category['children'];
            }
            if (null !== $child = $this->_searchChildren($category['children'], $parentCategoryId)) {
                return $child;
            }
        }
    }

    /**
     * Buduje płaskie drzewo
     * @param string $prefix
     * @param array $flatTree
     * @param array $categories
     * @param string $categoryTypeKey filtrowanie po typie kategorii
     */
    private function _buildFlatTree($prefix, array &$flatTree, array $categories, $categoryTypeKey)
    {
        //iteracja po kategoriach
        foreach ($categories as $id => $leaf) {
            if (null === $categoryTypeKey || $leaf['record']->getJoined('cms_category_type')->key === $categoryTypeKey) {
                //dodanie rekordu z prefixem i nazwą
                $flatTree[$id] = ltrim($prefix . ' > ' . $leaf['record']->name, ' >');
            }
            //zejście rekurencyjne
            $this->_buildFlatTree($prefix . ' > ' . $leaf['record']->name, $flatTree, $leaf['children'], $categoryTypeKey);
        }
    }

    /**
     * Buduje drzewo rekurencyjnie
     * @param array $tree
     * @param array $parents
     * @param array $orderedCategories
     * @param CmsCategoryRecord|null $parentCategory
     */
    private function _buildTree(array &$tree, array $parents, array $orderedCategories, CmsCategoryRecord $parentCategory = null)
    {
        //uzupełnienie rodziców
        if ($parentCategory !== null) {
            $parents[$parentCategory->id] = $parentCategory;
        } else {
            $parentCategory = new CmsCategoryRecord;
            $parentCategory->id = null;
        }
        /* @var $categoryRecord CmsCategoryRecord */
        foreach ($orderedCategories as $key => $categoryRecord) {
            //niezgodny rodzic
            if ($categoryRecord->parentId != $parentCategory->id) {
                continue;
            }
            //dodawanie do płaskiej listy
            $this->_flatCategories[$categoryRecord->id] = $categoryRecord;
            //usuwanie wykorzystanego rekordu kategorii
            unset($orderedCategories[$key]);
            //zapis do drzewa
            $tree[$categoryRecord->id] = [];
            $tree[$categoryRecord->id]['record'] = $categoryRecord->setOption('parents', $parents);
            $tree[$categoryRecord->id]['children'] = [];
            //zejście rekurencyjne do dzieci
            $this->_buildTree($tree[$categoryRecord->id]['children'], $parents, $orderedCategories, $categoryRecord);
        }
    }

}
