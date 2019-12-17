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
 * PurchaseRequisitionExpense
 */
class PurchaseRequisitionExpense {
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isClosed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $poVendor;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $linkedOrderList;
	/**
	 * @access public
	 * @var string
	 */
	public $linkedOrderStatus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;

	static $paramtypesmap = array(
		"line" => "integer",
		"category" => "RecordRef",
		"location" => "RecordRef",
		"isClosed" => "boolean",
		"account" => "RecordRef",
		"poVendor" => "RecordRef",
		"estimatedAmount" => "float",
		"amount" => "float",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"customer" => "RecordRef",
		"linkedOrderList" => "RecordRefList",
		"linkedOrderStatus" => "string",
		"isBillable" => "boolean",
	);
}
