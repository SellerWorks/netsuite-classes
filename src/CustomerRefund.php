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
 * CustomerRefund
 */
class CustomerRefund extends Record {
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
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var string
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $arAcct;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var string
	 */
	public $address;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $voidJournal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var boolean
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var string
	 */
	public $debitCardIssueNo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCardProcessor;
	/**
	 * @access public
	 * @var boolean
	 */
	public $chargeIt;
	/**
	 * @access public
	 * @var string
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
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
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentOption;
	/**
	 * @access public
	 * @var string
	 */
	public $inputAuthCode;
	/**
	 * @access public
	 * @var string
	 */
	public $inputReferenceCode;
	/**
	 * @access public
	 * @var string
	 */
	public $checkNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $paymentCardCsc;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentProcessingProfile;
	/**
	 * @access public
	 * @var CustomerRefundHandlingMode
	 */
	public $handlingMode;
	/**
	 * @access public
	 * @var string
	 */
	public $outputAuthCode;
	/**
	 * @access public
	 * @var string
	 */
	public $outputReferenceCode;
	/**
	 * @access public
	 * @var CustomerRefundPaymentOperation
	 */
	public $paymentOperation;
	/**
	 * @access public
	 * @var string
	 */
	public $dynamicDescriptor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccIsPurchaseCardBin;
	/**
	 * @access public
	 * @var string
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccProcessAsPurchaseCard;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ccExpireDate;
	/**
	 * @access public
	 * @var string
	 */
	public $ccName;
	/**
	 * @access public
	 * @var string
	 */
	public $ccStreet;
	/**
	 * @access public
	 * @var string
	 */
	public $ccZipCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccApproved;
	/**
	 * @access public
	 * @var CustomerRefundApplyList
	 */
	public $applyList;
	/**
	 * @access public
	 * @var CustomerRefundDepositList
	 */
	public $depositList;
	/**
	 * @access public
	 * @var AccountingBookDetailList
	 */
	public $accountingBookDetailList;
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
		"status" => "string",
		"transactionNumber" => "string",
		"customer" => "RecordRef",
		"customForm" => "RecordRef",
		"balance" => "float",
		"arAcct" => "RecordRef",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"address" => "string",
		"total" => "float",
		"currency" => "RecordRef",
		"tranDate" => "dateTime",
		"voidJournal" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"paymentMethod" => "RecordRef",
		"account" => "RecordRef",
		"toBePrinted" => "boolean",
		"tranId" => "string",
		"debitCardIssueNo" => "string",
		"creditCardProcessor" => "RecordRef",
		"chargeIt" => "boolean",
		"pnRefNum" => "string",
		"validFrom" => "dateTime",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"paymentOption" => "RecordRef",
		"inputAuthCode" => "string",
		"inputReferenceCode" => "string",
		"checkNumber" => "string",
		"paymentCardCsc" => "string",
		"paymentProcessingProfile" => "RecordRef",
		"handlingMode" => "CustomerRefundHandlingMode",
		"outputAuthCode" => "string",
		"outputReferenceCode" => "string",
		"paymentOperation" => "CustomerRefundPaymentOperation",
		"dynamicDescriptor" => "string",
		"creditCard" => "RecordRef",
		"ccIsPurchaseCardBin" => "boolean",
		"ccNumber" => "string",
		"ccProcessAsPurchaseCard" => "boolean",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"ccApproved" => "boolean",
		"applyList" => "CustomerRefundApplyList",
		"depositList" => "CustomerRefundDepositList",
		"accountingBookDetailList" => "AccountingBookDetailList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
