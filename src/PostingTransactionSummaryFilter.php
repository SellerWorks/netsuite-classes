<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * PostingTransactionSummaryFilter
 */
class PostingTransactionSummaryFilter {
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $parentItem;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $book;

	static $paramtypesmap = array(
		"period" => "RecordRefList",
		"account" => "RecordRefList",
		"parentItem" => "RecordRefList",
		"item" => "RecordRefList",
		"entity" => "RecordRefList",
		"department" => "RecordRefList",
		"class" => "RecordRefList",
		"location" => "RecordRefList",
		"subsidiary" => "RecordRefList",
		"book" => "RecordRefList",
	);
}
