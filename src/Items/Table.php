<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11.10.2016
 * Time: 09:31
 */

/**
 * Interface ItemTable
 *
 * 2D table
 */
namespace Phunc;

/**
 * Interface ItemsTable
 * @package phunc
 */
interface ItemsTable
{
    /** return array */
    public function type();

    /** return array */
    public function all();

    /** return array */
    public function current();

    /** return array */
    public function nextCol();

    public function nextRow();

    public function nextCell();

    public function item();

}