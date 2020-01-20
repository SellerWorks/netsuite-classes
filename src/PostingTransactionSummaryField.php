<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * PostingTransactionSummaryField
 */
class PostingTransactionSummaryField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $period;
	/**
	 * @access public
	 * @var boolean
	 */
	public $account;
	/**
	 * @access public
	 * @var boolean
	 */
	public $parentItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $entity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $department;
	/**
	 * @access public
	 * @var boolean
	 */
	public $class;
	/**
	 * @access public
	 * @var boolean
	 */
	public $location;
	/**
	 * @access public
	 * @var boolean
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var boolean
	 */
	public $book;

	static $paramtypesmap = array(
		"period" => "boolean",
		"account" => "boolean",
		"parentItem" => "boolean",
		"item" => "boolean",
		"entity" => "boolean",
		"department" => "boolean",
		"class" => "boolean",
		"location" => "boolean",
		"subsidiary" => "boolean",
		"book" => "boolean",
	);
}
