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
 * VendorBillInstallment
 */
class VendorBillInstallment {
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var float
	 */
	public $amountDue;
	/**
	 * @access public
	 * @var integer
	 */
	public $seqNum;
	/**
	 * @access public
	 * @var string
	 */
	public $status;

	static $paramtypesmap = array(
		"amount" => "float",
		"dueDate" => "dateTime",
		"amountDue" => "float",
		"seqNum" => "integer",
		"status" => "string",
	);
}
