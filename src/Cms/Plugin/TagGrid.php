<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2015 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace Cms\Plugin;

class TagGrid extends \Mmi\Grid {

	public function init() {

		$this->setQuery(\Cms\Orm\Tag\Query::factory());
		$this->setOption('locked', true);

		$this->addColumn('text', 'tag', [
			'label' => 'tag',
		]);

		$this->addColumn('buttons', 'buttons', [
			'label' => 'operacje'
		]);
	}

}
