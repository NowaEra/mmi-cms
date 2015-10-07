<?php

namespace Cms\Orm\QueryHelper;

/**
 * @method \Cms\Orm\CmsCronQuery equals($value)
 * @method \Cms\Orm\CmsCronQuery notEquals($value)
 * @method \Cms\Orm\CmsCronQuery greater($value)
 * @method \Cms\Orm\CmsCronQuery less($value)
 * @method \Cms\Orm\CmsCronQuery greaterOrEquals($value)
 * @method \Cms\Orm\CmsCronQuery lessOrEquals($value)
 * @method \Cms\Orm\CmsCronQuery like($value)
 * @method \Cms\Orm\CmsCronQuery ilike($value)
 * @method \Cms\Orm\CmsCronQuery equalsColumnId()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnId()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnId()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnId()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnId()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnId()
 * @method \Cms\Orm\CmsCronQuery equalsColumnActive()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnActive()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnActive()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnActive()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnActive()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnActive()
 * @method \Cms\Orm\CmsCronQuery equalsColumnMinute()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnMinute()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnMinute()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnMinute()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnMinute()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnMinute()
 * @method \Cms\Orm\CmsCronQuery equalsColumnHour()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnHour()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnHour()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnHour()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnHour()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnHour()
 * @method \Cms\Orm\CmsCronQuery equalsColumnDayOfMonth()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnDayOfMonth()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnDayOfMonth()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnDayOfMonth()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnDayOfMonth()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnDayOfMonth()
 * @method \Cms\Orm\CmsCronQuery equalsColumnMonth()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnMonth()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnMonth()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnMonth()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnMonth()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnMonth()
 * @method \Cms\Orm\CmsCronQuery equalsColumnDayOfWeek()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnDayOfWeek()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnDayOfWeek()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnDayOfWeek()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnDayOfWeek()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnDayOfWeek()
 * @method \Cms\Orm\CmsCronQuery equalsColumnName()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnName()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnName()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnName()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnName()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnName()
 * @method \Cms\Orm\CmsCronQuery equalsColumnDescription()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnDescription()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnDescription()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnDescription()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnDescription()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnDescription()
 * @method \Cms\Orm\CmsCronQuery equalsColumnModule()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnModule()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnModule()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnModule()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnModule()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnModule()
 * @method \Cms\Orm\CmsCronQuery equalsColumnController()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnController()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnController()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnController()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnController()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnController()
 * @method \Cms\Orm\CmsCronQuery equalsColumnAction()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnAction()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnAction()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnAction()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnAction()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnAction()
 * @method \Cms\Orm\CmsCronQuery equalsColumnDateAdd()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnDateAdd()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnDateAdd()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnDateAdd()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnDateAdd()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnDateAdd()
 * @method \Cms\Orm\CmsCronQuery equalsColumnDateModified()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnDateModified()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnDateModified()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnDateModified()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnDateModified()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnDateModified()
 * @method \Cms\Orm\CmsCronQuery equalsColumnDateLastExecute()
 * @method \Cms\Orm\CmsCronQuery notEqualsColumnDateLastExecute()
 * @method \Cms\Orm\CmsCronQuery greaterThanColumnDateLastExecute()
 * @method \Cms\Orm\CmsCronQuery lessThanColumnDateLastExecute()
 * @method \Cms\Orm\CmsCronQuery greaterOrEqualsColumnDateLastExecute()
 * @method \Cms\Orm\CmsCronQuery lessOrEqualsColumnDateLastExecute()
 */
class CmsCronQueryField extends \Mmi\Orm\QueryHelper\QueryField {

}