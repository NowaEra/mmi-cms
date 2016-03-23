<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2016 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace Cms\Form\Element;

class Tree extends \Mmi\Form\Element\ElementAbstract {

	/**
	 * Funkcja użytkownika, jest wykonywana na końcu konstruktora
	 */
	public function init() {
		$this->addFilterEmptyToNull();
		return parent::init();
	}

	/**
	 * Ustawia strukturę drzewka
	 * @param array $structure
	 * @return \Cms\Form\Element\Tree
	 */
	public function setStructure(array $structure) {
		$this->setOption('structure', $structure);
		return $this;
	}

	/**
	 * Ustawia wielokrotny wybór na drzewku
	 * @return \Cms\Form\Element\Tree
	 */
	public function setMultiple($multiple = true) {
		$this->setOption('multiple', $multiple);
		return $this;
	}

	/**
	 * Buduje pole
	 * @return string
	 */
	public function fetchField() {
		//powolanie widoku, CSS i JavaScriptow
		$view = \Mmi\App\FrontController::getInstance()->getView();
		$view->headLink()->appendStylesheet($view->baseUrl . '/resource/cmsAdmin/css/tree.css');
		$view->headLink()->appendStylesheet($view->baseUrl . '/resource/cmsAdmin/js/jstree/themes/default/style.min.css');
		$view->headScript()->prependFile($view->baseUrl . '/resource/cmsAdmin/js/jquery/jquery.js');
		$view->headScript()->appendFile($view->baseUrl . '/resource/cmsAdmin/js/jstree/jstree.min.js');

		//glowny kontener drzewa
		$html = '<div class="tree_container">';
		$html .= $this->_getHtmlTree();
		$this->unsetOption('structure');
		$html .= '<input type="hidden" ' . $this->_getHtmlOptions() . '/></div>';

		return $html;
	}

	/**
	 * Zwraca drzewko danych w postaci html
	 * @return string
	 */
	private function _getHtmlTree() {
		//pobranie struktury
		$structure = $this->getOption('structure');
		//bez struktury zwraca pusty string
		if (!is_array($structure) || empty($structure)) {
			return '';
		}
		//bez dzieci rowniez zwraca pusty string
		if (!isset($structure['children'])) {
			return '';
		}
		//skladam identyfikator galezi
		$treeId = $this->getOption('id') . '_tree';
		//zidentyfikowana gałąź drzewa
		$html = '<div class="tree_structure" id="' . $treeId . '">';
		$html .= $this->_generateTree($structure, '');
		$html .= '</div>';
		$html .= '<input type="button" id="' . $treeId . '_clear" class="tree_clear" value="wyczyść wybór" />';

		$this->_generateJs($treeId);

		return $html;
	}

	/**
	 * Generuje fragmenty drzewka
	 * @param array $node
	 * @param string $html
	 * @return string
	 */
	private function _generateTree($node, $html) {
		//jezeli nie ma wezłów z dzieciakami to zwracam pusty html
		if (!isset($node['children']) || !is_array($node['children']) || count($node['children']) == 0) {
			return $html;
		}
		$html .= '<ul>';
		//iteracja po dzieciakach i budowa lisci drzewa
		foreach ($node['children'] as $child) {
			$select = 'false';
			if ($child['id'] == $this->getValue()) {
				$select = 'true';
			}
			$disabled = 'false';
			if (isset($child['allow']) && !$child['allow']) {
				$disabled = 'true';
			}
			$html .= '<li id="' . $child['id'] . '"';
			$html .= ' data-jstree=\'{"type":"default", "disabled":' . $disabled . ', "selected":' . $select . '}\'>' . $child['name'];
			$html = self::_generateTree($child, $html);
			$html .= '</li>';
		}
		$html .= '</ul>';
		return $html;
	}

	/**
	 * Generuje JS do odpalenia drzewka
	 * @param string $treeId
	 * @return void
	 */
	private function _generateJs($treeId) {
		$id = $this->getOption('id');
		$treeClearId = $treeId . '_clear';
		$view = \Mmi\App\FrontController::getInstance()->getView();
		$view->headScript()->appendScript("$(document).ready(function () {
				$('#$treeId').jstree({
					'core': {
						'themes': {
							'name': 'default',
							'variant': 'small',
							'responsive' : true,
							'stripes' : true
						},
						'multiple': " . ($this->getOption('multiple') ? 'true' : 'false') . ",
						'expand_selected_onload': true,
						'check_callback' : false
					}
				})
				.on('changed.jstree', function (e, data) {
					if (0 in data.selected) {
						$('#$id').val(data.selected[0]);
					}
				});
				$('#$treeClearId').click(function () {
					$('#$id').val('');
					$('#$treeId').jstree('deselect_all');
				});
			});
		");
	}

}
