<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2015 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace Mmi\Validator;

class Captcha extends ValidatorAbstract {

	const INVALID = 'Przepisany kod jest niepoprawny';

	/**
	 * Waliduje poprawność captcha
	 * @param string $value
	 * @return boolean
	 */
	public function isValid($value) {
		$this->_error(self::INVALID);
		$session = new \Mmi\Session\Space('MmiForm');
		$name = 'captcha-' . $this->_options['name'];
		return ($session->$name == strtoupper($value));
	}

}
