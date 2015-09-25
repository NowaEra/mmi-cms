<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2015 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace CmsAdmin;

/**
 * Kontroler logów
 */
class LogController extends Mvc\Controller {

	/**
	 * Lista logów
	 */
	public function indexAction() {
		$grid = new \Cms\Plugin\LogGrid();
		$this->view->grid = $grid;
	}

	/**
	 * Lista logów błędu
	 */
	public function errorAction() {
		$logFile = BASE_PATH . '/var/log/error.execution.log';
		$this->view->data = nl2br(file_get_contents($logFile, 0, NULL, filesize($logFile) - 32000));
	}

}