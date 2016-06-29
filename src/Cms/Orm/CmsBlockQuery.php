<?php

namespace Cms\Orm;

//<editor-fold defaultstate="collapsed" desc="CmsBlockQuery">
/**
 * @method CmsBlockQuery limit($limit = null)
 * @method CmsBlockQuery offset($offset = null)
 * @method CmsBlockQuery orderAsc($fieldName, $tableName = null)
 * @method CmsBlockQuery orderDesc($fieldName, $tableName = null)
 * @method CmsBlockQuery andQuery(\Mmi\Orm\Query $query)
 * @method CmsBlockQuery whereQuery(\Mmi\Orm\Query $query)
 * @method CmsBlockQuery orQuery(\Mmi\Orm\Query $query)
 * @method CmsBlockQuery resetOrder()
 * @method CmsBlockQuery resetWhere()
 * @method QueryHelper\CmsBlockQueryField whereId()
 * @method QueryHelper\CmsBlockQueryField andFieldId()
 * @method QueryHelper\CmsBlockQueryField orFieldId()
 * @method CmsBlockQuery orderAscId()
 * @method CmsBlockQuery orderDescId()
 * @method CmsBlockQuery groupById()
 * @method QueryHelper\CmsBlockQueryField whereLang()
 * @method QueryHelper\CmsBlockQueryField andFieldLang()
 * @method QueryHelper\CmsBlockQueryField orFieldLang()
 * @method CmsBlockQuery orderAscLang()
 * @method CmsBlockQuery orderDescLang()
 * @method CmsBlockQuery groupByLang()
 * @method QueryHelper\CmsBlockQueryField whereTitle()
 * @method QueryHelper\CmsBlockQueryField andFieldTitle()
 * @method QueryHelper\CmsBlockQueryField orFieldTitle()
 * @method CmsBlockQuery orderAscTitle()
 * @method CmsBlockQuery orderDescTitle()
 * @method CmsBlockQuery groupByTitle()
 * @method QueryHelper\CmsBlockQueryField whereLead()
 * @method QueryHelper\CmsBlockQueryField andFieldLead()
 * @method QueryHelper\CmsBlockQueryField orFieldLead()
 * @method CmsBlockQuery orderAscLead()
 * @method CmsBlockQuery orderDescLead()
 * @method CmsBlockQuery groupByLead()
 * @method QueryHelper\CmsBlockQueryField whereText()
 * @method QueryHelper\CmsBlockQueryField andFieldText()
 * @method QueryHelper\CmsBlockQueryField orFieldText()
 * @method CmsBlockQuery orderAscText()
 * @method CmsBlockQuery orderDescText()
 * @method CmsBlockQuery groupByText()
 * @method QueryHelper\CmsBlockQueryField whereObject()
 * @method QueryHelper\CmsBlockQueryField andFieldObject()
 * @method QueryHelper\CmsBlockQueryField orFieldObject()
 * @method CmsBlockQuery orderAscObject()
 * @method CmsBlockQuery orderDescObject()
 * @method CmsBlockQuery groupByObject()
 * @method QueryHelper\CmsBlockQueryField whereObjectId()
 * @method QueryHelper\CmsBlockQueryField andFieldObjectId()
 * @method QueryHelper\CmsBlockQueryField orFieldObjectId()
 * @method CmsBlockQuery orderAscObjectId()
 * @method CmsBlockQuery orderDescObjectId()
 * @method CmsBlockQuery groupByObjectId()
 * @method QueryHelper\CmsBlockQueryField whereDateAdd()
 * @method QueryHelper\CmsBlockQueryField andFieldDateAdd()
 * @method QueryHelper\CmsBlockQueryField orFieldDateAdd()
 * @method CmsBlockQuery orderAscDateAdd()
 * @method CmsBlockQuery orderDescDateAdd()
 * @method CmsBlockQuery groupByDateAdd()
 * @method QueryHelper\CmsBlockQueryField whereDateModify()
 * @method QueryHelper\CmsBlockQueryField andFieldDateModify()
 * @method QueryHelper\CmsBlockQueryField orFieldDateModify()
 * @method CmsBlockQuery orderAscDateModify()
 * @method CmsBlockQuery orderDescDateModify()
 * @method CmsBlockQuery groupByDateModify()
 * @method QueryHelper\CmsBlockQueryField andField($fieldName, $tableName = null)
 * @method QueryHelper\CmsBlockQueryField where($fieldName, $tableName = null)
 * @method QueryHelper\CmsBlockQueryField orField($fieldName, $tableName = null)
 * @method QueryHelper\CmsBlockQueryJoin join($tableName, $targetTableName = null, $alias = null)
 * @method QueryHelper\CmsBlockQueryJoin joinLeft($tableName, $targetTableName = null, $alias = null)
 * @method CmsBlockRecord[] find()
 * @method CmsBlockRecord findFirst()
 * @method CmsBlockRecord findPk($value)
 */
//</editor-fold>
class CmsBlockQuery extends \Mmi\Orm\Query {

	protected $_tableName = 'cms_block';

}