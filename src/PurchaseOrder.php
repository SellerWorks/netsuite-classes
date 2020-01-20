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
 * PurchaseOrder
 */
class PurchaseOrder extends Record {
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
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseContract;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var boolean
	 */
	public $supervisorApproval;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
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
	public $createdFrom;
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
	 * @var string
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var float
	 */
	public $availableVendorCredit;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var string
	 */
	public $source;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBeEmailed;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBeFaxed;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var Address
	 */
	public $billingAddress;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billAddressList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipTo;
	/**
	 * @access public
	 * @var float
	 */
	public $subTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var Address
	 */
	public $shippingAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $shipIsResidential;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipAddressList;
	/**
	 * @access public
	 * @var string
	 */
	public $fob;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $shipDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $incoterm;
	/**
	 * @access public
	 * @var string
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $linkedTrackingNumbers;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
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
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $intercoTransaction;
	/**
	 * @access public
	 * @var IntercoStatus
	 */
	public $intercoStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var PurchaseOrderOrderStatus
	 */
	public $orderStatus;
	/**
	 * @access public
	 * @var PurchaseOrderItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var AccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * @access public
	 * @var PurchaseOrderExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var TaxDetailsList
	 */
	public $taxDetailsList;
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
		"entity" => "RecordRef",
		"purchaseContract" => "RecordRef",
		"vatRegNum" => "string",
		"employee" => "RecordRef",
		"supervisorApproval" => "boolean",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"entityTaxRegNum" => "RecordRef",
		"taxPointDate" => "dateTime",
		"createdFrom" => "RecordRef",
		"terms" => "RecordRef",
		"dueDate" => "dateTime",
		"otherRefNum" => "string",
		"availableVendorCredit" => "float",
		"memo" => "string",
		"approvalStatus" => "RecordRef",
		"exchangeRate" => "float",
		"nextApprover" => "RecordRef",
		"source" => "string",
		"currencyName" => "string",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"email" => "string",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"currency" => "RecordRef",
		"shipTo" => "RecordRef",
		"subTotal" => "float",
		"taxTotal" => "float",
		"tax2Total" => "float",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"shipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"incoterm" => "RecordRef",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"total" => "float",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"status" => "string",
		"orderStatus" => "PurchaseOrderOrderStatus",
		"itemList" => "PurchaseOrderItemList",
		"accountingBookDetailList" => "AccountingBookDetailList",
		"expenseList" => "PurchaseOrderExpenseList",
		"taxDetailsList" => "TaxDetailsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
