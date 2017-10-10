<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2017 Mariusz Miłejko (mariusz@milejko.pl)
 * @license    https://en.wikipedia.org/wiki/BSD_licenses New BSD License
 */

namespace Cms\Form\Element;

/**
 * Klasa guzika
 */
class Button extends \Mmi\Form\Element\ElementAbstract
{

    /**
     * Ignorowanie tego pola, inna kolejnośc renderowania
     */
    public function __construct($name)
    {
        parent::__construct($name);
        $this->setIgnore();
        $this->setRenderingOrder(['fetchBegin', 'fetchField', 'fetchErrors', 'fetchEnd']);
    }

    /**
     * Buduje pole
     * @return string
     */
    public function fetchField()
    {
        //labelka jako value
        if ($this->getLabel()) {
            $this->setValue($this->getLabel());
        }
        return '<input type="button" ' . $this->_getHtmlOptions() . '/>';
    }

}
