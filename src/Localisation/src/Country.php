<?php

namespace Phunc\Local;

/**
 * Class Country
 * @package Phunc\Local
 */
class Country
{
	/** @var  string */
	protected $country;

	/** @var  string */
	protected $dec_point;

	/** @var  string */
	protected $thousands_sep;

	/**
	 * @param string $country
	 */
	public function __construct($country = 'CH', $dec_point = ".", $thousands_sep = "'")
	{
		$this->country = $country;
		$this->dec_point = $dec_point;
		$this->thousands_sep = $thousands_sep;

		$this->config();
	}

	/**
	 * @return $this
	 */
	public function config()
	{
		if ($this->country != 'CH') {
			$this->dec_point = ",";
			$this->thousands_sep = ".";
		}
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return Country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDecPoint()
	{
		return $this->dec_point;
	}

	/**
	 * @param string $dec_point
	 * @return Country
	 */
	public function setDecPoint($dec_point)
	{
		$this->dec_point = $dec_point;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getThousandsSep()
	{
		return $this->thousands_sep;
	}

	/**
	 * @param string $thousands_sep
	 * @return Country
	 */
	public function setThousandsSep($thousands_sep)
	{
		$this->thousands_sep = $thousands_sep;
		return $this;
	}
}