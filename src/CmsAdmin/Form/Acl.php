<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2015 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace CmsAdmin\Form;

class Acl extends \Mmi\Form\Form {

	public function init() {

		$this->_record->cmsRoleId = \Mmi\App\FrontController::getInstance()->getRequest()->roleId;

		$this->addElementSelect('object')
			->setMultioptions(array_merge(['' => '---'], \CmsAdmin\Model\Reflection::getOptionsWildcard()));

		$this->addElementSelect('access')
			->setMultioptions([
				'allow' => 'dozwolone',
				'deny' => 'zabronione'
			]);

		$this->addElementSubmit('submit')
			->setLabel('dodaj regułę');
	}

}
