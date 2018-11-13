<?php

namespace Phunc\Local;

/**
 * Class Label
 * @package Phunc\Local
 */
class Label
{
	/** @var  string */
	protected $language;

	/** @var  array */
	protected $localization;

	/**
	 * @param string $language
	 */
	public function __construct($language = 'de')
	{
		$this->language = $language;
		$this->loadLocalization();
	}

	protected function loadLocalization($localization_file_content)
	{
		$this->localization = json_decode($localization_file_content, true);
	}

	/**
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * @return array
	 */
	public function getLocalization()
	{
		return $this->localization;
	}
}