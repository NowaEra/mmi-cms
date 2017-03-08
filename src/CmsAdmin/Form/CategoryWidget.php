<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2016 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace CmsAdmin\Form;

/**
 * Formularz edycji widgetu kategorii
 */
class CategoryWidget extends \Cms\Form\Form {

	public function init() {

		//lista widgetów
		$widgets = [null => '---'] + \CmsAdmin\Model\Reflection::getOptionsWildcard(3, '/widget/');

		//nazwa
		$this->addElementText('name')
			->setLabel('nazwa')
			->setRequired()
			->addValidatorStringLength(3, 64);

		//parametry wyświetlania
		$this->addElementSelect('mvcParams')
			->setLabel('adres modułu wyświetlania')
			->setMultioptions($widgets)
			->setRequired()
			->addValidatorNotEmpty();

		//parametry podglądu
		$this->addElementSelect('mvcPreviewParams')
			->setLabel('adres modułu podglądu')
			->setMultioptions($widgets)
			->setRequired()
			->addValidatorNotEmpty();

		//klasa formularza (brak - domyślna)
		$this->addElementText('formClass')
			->setLabel('klasa formularza')
			->setDescription('dane i konfiguracja')
			->addFilterEmptyToNull()
			->addValidatorStringLength(3, 64);

		//ustawienie bufora
		$this->addElementSelect('cacheLifetime')
			->setLabel('odświeżanie')
			->setMultioptions(\Cms\Orm\CmsCategoryWidgetRecord::CACHE_LIFETIMES)
			->setValue(\Cms\Orm\CmsCategoryWidgetRecord::DEFAULT_CACHE_LIFETIME)
			->addFilterEmptyToNull();

		//zapis
		$this->addElementSubmit('submit')
			->setLabel('zapisz widget');
	}

}
