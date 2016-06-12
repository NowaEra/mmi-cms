<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2016 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace CmsAdmin\Form;

class Article extends \Cms\Form\Form {

	public function init() {

		//tytuł
		$this->addElementText('title')
			->setRequired()
			->addValidatorNotEmpty()
			->setLabel('tytuł');
		
		//kategorie
		$this->addElementSelect('cmsCategoryId')
			->setMultiple()
			->setMultioptions([])
			->setLabel('kategorie')
			->setDescription('nie jest obowiązkowa, wybór wielu kategorii z CTRL');

		//nagłówek
		$this->addElementTinyMce('lead')
			->setLabel('nagłówek artykułu')
			->setModeAdvanced();

		//treść
		$this->addElementTinyMce('text')
			->setLabel('treść artykułu')
			->setModeAdvanced();

		//opcja noindex
		$this->addElementCheckbox('index')
			->setChecked()
			->setLabel('indeksowanie w wyszukiwarkach');

		//uploader - plupload
		$this->addElementPlupload('uploader')
			->setLabel('załaduj pliki');

		//aktywny
		$this->addElementCheckbox('active')
			->setChecked()
			->setLabel('włączony');

		$this->addElementSubmit('submit')
			->setLabel('zapisz stronę');
	}

}
