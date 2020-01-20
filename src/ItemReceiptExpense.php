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
 * ItemReceiptExpense
 */
class ItemReceiptExpense {
	/**
	 * @access public
	 * @var boolean
	 */
	public $markReceived;
	/**
	 * @access public
	 * @var integer
	 */
	public $orderLine;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var string
	 */
	public $account;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"markReceived" => "boolean",
		"orderLine" => "integer",
		"line" => "integer",
		"account" => "string",
		"memo" => "string",
		"amount" => "float",
		"customFieldList" => "CustomFieldList",
	);
}
