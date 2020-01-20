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
 * BillingAccount
 */
class BillingAccount extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $idNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $customerDefault;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inactive;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var string
	 */
	public $createdBy;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var BillingAccountFrequency
	 */
	public $frequency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastBillDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastBillCycleDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextBillCycleDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $invoiceForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $cashSaleForm;
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
		"customForm" => "RecordRef",
		"idNumber" => "string",
		"customerDefault" => "boolean",
		"customer" => "RecordRef",
		"subsidiary" => "RecordRef",
		"name" => "string",
		"inactive" => "boolean",
		"memo" => "string",
		"createdDate" => "dateTime",
		"createdBy" => "string",
		"currency" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"frequency" => "BillingAccountFrequency",
		"startDate" => "dateTime",
		"lastBillDate" => "dateTime",
		"lastBillCycleDate" => "dateTime",
		"nextBillCycleDate" => "dateTime",
		"invoiceForm" => "RecordRef",
		"cashSaleForm" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
