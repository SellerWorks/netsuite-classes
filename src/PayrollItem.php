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
 * PayrollItem
 */
class PayrollItem extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemType;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $employeePaid;
	/**
	 * @access public
	 * @var PayrollItemAccountCategory
	 */
	public $accountCategory;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inactive;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"subsidiary" => "RecordRef",
		"itemType" => "RecordRef",
		"name" => "string",
		"vendor" => "RecordRef",
		"expenseAccount" => "RecordRef",
		"liabilityAccount" => "RecordRef",
		"employeePaid" => "boolean",
		"accountCategory" => "PayrollItemAccountCategory",
		"inactive" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
