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
 * BillingAccountSearchRowBasic
 */
class BillingAccountSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $cashSaleForm;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $customerDefault;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $frequency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $idNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $inactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $invoiceForm;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastBillCycleDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastBillDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $nextBillCycleDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"billingSchedule" => "SearchColumnSelectField[]",
		"cashSaleForm" => "SearchColumnSelectField[]",
		"class" => "SearchColumnSelectField[]",
		"currency" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"customerDefault" => "SearchColumnBooleanField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"frequency" => "SearchColumnEnumSelectField[]",
		"idNumber" => "SearchColumnStringField[]",
		"inactive" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"invoiceForm" => "SearchColumnSelectField[]",
		"lastBillCycleDate" => "SearchColumnDateField[]",
		"lastBillDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"nextBillCycleDate" => "SearchColumnDateField[]",
		"startDate" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
