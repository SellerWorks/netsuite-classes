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
 * VendorBill
 */
class VendorBill extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiaryTaxRegNum;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxRegOverride;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxDetailsOverride;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billAddressList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var Address
	 */
	public $billingAddress;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entityTaxRegNum;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $taxPointDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $terms;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $discountDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var float
	 */
	public $userTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $paymentHold;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var float
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var float
	 */
	public $availableVendorCredit;
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
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var LandedCostMethod
	 */
	public $landedCostMethod;
	/**
	 * @access public
	 * @var boolean
	 */
	public $landedCostPerLine;
	/**
	 * @access public
	 * @var string
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var VendorBillExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var AccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * @access public
	 * @var VendorBillItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var VendorBillInstallmentList
	 */
	public $installmentList;
	/**
	 * @access public
	 * @var PurchLandedCostList
	 */
	public $landedCostsList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $purchaseOrderList;
	/**
	 * @access public
	 * @var TaxDetailsList
	 */
	public $taxDetailsList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overrideInstallments;
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
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"nexus" => "RecordRef",
		"subsidiaryTaxRegNum" => "RecordRef",
		"taxRegOverride" => "boolean",
		"taxDetailsOverride" => "boolean",
		"customForm" => "RecordRef",
		"billAddressList" => "RecordRef",
		"account" => "RecordRef",
		"entity" => "RecordRef",
		"subsidiary" => "RecordRef",
		"approvalStatus" => "RecordRef",
		"nextApprover" => "RecordRef",
		"vatRegNum" => "string",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"currencyName" => "string",
		"billingAddress" => "Address",
		"exchangeRate" => "float",
		"entityTaxRegNum" => "RecordRef",
		"taxPointDate" => "dateTime",
		"terms" => "RecordRef",
		"dueDate" => "dateTime",
		"discountDate" => "dateTime",
		"tranId" => "string",
		"userTotal" => "float",
		"discountAmount" => "float",
		"taxTotal" => "float",
		"paymentHold" => "boolean",
		"memo" => "string",
		"tax2Total" => "float",
		"creditLimit" => "float",
		"availableVendorCredit" => "float",
		"currency" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"status" => "string",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"transactionNumber" => "string",
		"expenseList" => "VendorBillExpenseList",
		"accountingBookDetailList" => "AccountingBookDetailList",
		"itemList" => "VendorBillItemList",
		"installmentList" => "VendorBillInstallmentList",
		"landedCostsList" => "PurchLandedCostList",
		"purchaseOrderList" => "RecordRefList",
		"taxDetailsList" => "TaxDetailsList",
		"overrideInstallments" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
