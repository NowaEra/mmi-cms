<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2015 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace Cms\Model\Api;

class DtoCollection extends \ArrayObject {

	/**
	 * Konstruktor ustawiający kolekcję na podstawie tablicy obiektów lub tablic
	 * @param mixed $data
	 */
	public function __construct($data = null) {
		if ($data === null) {
			return;
		}
		if ($data instanceof \Mmi\Orm\Record\Collection) {
			$this->setFromDaoRecordCollection($data);
			return;
		}
		if (!is_array($data) || empty($data)) {
			return;
		}
		if (!is_array(reset($data))) {
			return parent::__construct($data);
		}
		$this->setFromArray($data);
	}

	/**
	 * Ustawia kolekcję na podstawie tablicy tablic
	 * @param array $data tablica obiektów \stdClass
	 * @return \Cms\Model\Api\DtoCollection
	 */
	public final function setFromArray(array $data) {
		$dtoClass = $this->_getDtoClass();
		$this->exchangeArray([]);
		foreach ($data as $array) {
			if (!is_array($array)) {
				continue;
			}
			$this->append(new $dtoClass($array));
		}
		return $this;
	}

	/**
	 * Ustawia kolekcję na podstawie obiektu obiektów
	 * @param \Mmi\Orm\Record\Collection $data kolekcja obiektów DAO
	 * @return \Cms\Model\Api\Orm\DtoCollection
	 */
	public final function setFromDaoRecordCollection(\Mmi\Orm\Record\Collection $data) {
		$dtoClass = $this->_getDtoClass();
		$this->exchangeArray([]);
		foreach ($data as $record) {
			$this->append(new $dtoClass($record));
		}
		return $this;
	}

	/**
	 * Zwraca kolekcję w postaci tablicy
	 * @return array
	 */
	public final function toArray() {
		$array = [];
		foreach ($this as $key => $dto) {
			$array[$key] = $dto->toArray();
		}
		return $array;
	}

	/**
	 * Zwraca kolekcję w postaci tablicy obiektów DTO
	 * @return array
	 */
	public final function toObjectArray() {
		$array = [];
		foreach ($this as $key => $dto) {
			$array[$key] = $dto;
		}
		return $array;
	}

	/**
	 * Ustala nazwę klasy DTO
	 * @return string
	 */
	protected final function _getDtoClass() {
		$dtoClass = substr(get_class($this), 0, -11);
		if ($dtoClass == '\Cms\Model\Api\Dto') {
			throw new\Exception('\Cms\Model\Api\Dto: Invalid DTO object name');
		}
		return $dtoClass;
	}

}
