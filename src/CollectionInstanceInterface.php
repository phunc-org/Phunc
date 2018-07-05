<?php

namespace Phunc;

/**
 * @package Phunc
 */
interface CollectionInstanceInterface
{
	/**
	 * Reset All Attributes
     * interface ResetAttributesInterface
	 *
	 * @return $this
	 */
	public function reset();

	/**
	 *
	 * interface FillFromArrayInterface
	 *
	 * @param array $array
	 * @return $this
	 */
	public function fillFromArray(array $array);


	/**
	 * All Attributes as Array
	 * interface ArrayAttributesInterface
	 *
	 * @return $this
	 */
	public function toArray();
}