<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2015 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace CmsAdmin\Plugin;

class ContactGrid extends \CmsAdmin\Plugin\Grid {

	public function init() {

		$this->setQuery(\Cms\Orm\CmsContactQuery::factory());

		$this->addColumn('custom', 'id', [
			'label' => 'ticket',
			'value' => '#{$rowData->id}'
		]);

		$this->addColumn('text', 'dateAdd', [
			'label' => 'data dodania'
		]);

		$this->addColumn('text', 'dateAdd', [
			'label' => 'data dodania'
		]);

		$this->addColumn('text', 'text', [
			'label' => 'zapytanie'
		]);

		$this->addColumn('text', 'email', [
			'label' => 'e-mail'
		]);

		$this->addColumn('text', 'uri', [
			'label' => 'strona wejściowa'
		]);

		$this->addColumn('text', 'ip', [
			'label' => 'ip'
		]);

		$this->addColumn('checkbox', 'active', [
			'label' => 'czeka'
		]);

		$this->addColumn('buttons', 'buttons', [
			'label' => 'operacje',
			'links' => [
				'edit' => $this->_view->url([
					'module' => 'cmsAdmin',
					'controller' => 'contact',
					'action' => 'edit',
					'id' => '%id%'
				]),
				'delete' => $this->_view->url([
					'module' => 'cmsAdmin',
					'controller' => 'contact',
					'action' => 'delete',
					'id' => '%id%'
				])
			]
		]);
	}

}