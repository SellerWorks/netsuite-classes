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
 * SalesOrder
 */
class SalesOrder extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
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
	public $job;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fxAccount;
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
	 * @var string
	 */
	public $source;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var SalesOrderOrderStatus
	 */
	public $orderStatus;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextBill;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $opportunity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var string
	 */
	public $contribPct;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesGroup;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncSalesTeams;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var string
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $salesEffectiveDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeCommission;
	/**
	 * @access public
	 * @var float
	 */
	public $totalCostEstimate;
	/**
	 * @access public
	 * @var float
	 */
	public $estGrossProfit;
	/**
	 * @access public
	 * @var float
	 */
	public $estGrossProfitPercent;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var string
	 */
	public $currencyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $discountItem;
	/**
	 * @access public
	 * @var string
	 */
	public $discountRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate;
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
	 * @var RecordRef
	 */
	public $messageSel;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
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
	 * @var SalesOrderHandlingMode
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
	 * @var SalesOrderPaymentOperation
	 */
	public $paymentOperation;
	/**
	 * @access public
	 * @var string
	 */
	public $dynamicDescriptor;
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
	 * @var dateTime
	 */
	public $actualShipDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $shippingTax1Rate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMultiShipTo;
	/**
	 * @access public
	 * @var string
	 */
	public $shippingTax2Rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shippingTaxCode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $handlingTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingTax1Rate;
	/**
	 * @access public
	 * @var string
	 */
	public $handlingTax2Rate;
	/**
	 * @access public
	 * @var float
	 */
	public $handlingCost;
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
	 * @var boolean
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var string
	 */
	public $shopperIpAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $saveOnAuthDecline;
	/**
	 * @access public
	 * @var boolean
	 */
	public $canHaveStackable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var RevenueStatus
	 */
	public $revenueStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $recognizedRevenue;
	/**
	 * @access public
	 * @var float
	 */
	public $deferredRevenue;
	/**
	 * @access public
	 * @var boolean
	 */
	public $revRecOnRevCommitment;
	/**
	 * @access public
	 * @var RevenueCommitStatus
	 */
	public $revCommitStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $ccNumber;
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
	 * @var string
	 */
	public $payPalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $creditCardProcessor;
	/**
	 * @access public
	 * @var string
	 */
	public $payPalTranId;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ccApproved;
	/**
	 * @access public
	 * @var boolean
	 */
	public $getAuth;
	/**
	 * @access public
	 * @var string
	 */
	public $authCode;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccAvsStreetMatch;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccAvsZipMatch;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isRecurringPayment;
	/**
	 * @access public
	 * @var AvsMatchCode
	 */
	public $ccSecurityCodeMatch;
	/**
	 * @access public
	 * @var float
	 */
	public $altSalesTotal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ignoreAvs;
	/**
	 * @access public
	 * @var TransactionPaymentEventResult
	 */
	public $paymentEventResult;
	/**
	 * @access public
	 * @var TransactionPaymentEventHoldReason
	 */
	public $paymentEventHoldReason;
	/**
	 * @access public
	 * @var TransactionPaymentEventType
	 */
	public $paymentEventType;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $paymentEventDate;
	/**
	 * @access public
	 * @var string
	 */
	public $paymentEventUpdatedBy;
	/**
	 * @access public
	 * @var float
	 */
	public $subTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $discountTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var float
	 */
	public $altShippingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $altHandlingCost;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var string
	 */
	public $paypalAuthId;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var boolean
	 */
	public $paypalProcess;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var string
	 */
	public $ccSecurityCode;
	/**
	 * @access public
	 * @var string
	 */
	public $threeDStatusCode;
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
	public $debitCardIssueNo;
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
	 * @var dateTime
	 */
	public $taxPointDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxDetailsOverride;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var string
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $terms;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFrom;
	/**
	 * @access public
	 * @var string
	 */
	public $vatRegNum;
	/**
	 * @access public
	 * @var float
	 */
	public $giftCertApplied;
	/**
	 * @access public
	 * @var float
	 */
	public $oneTime;
	/**
	 * @access public
	 * @var float
	 */
	public $recurWeekly;
	/**
	 * @access public
	 * @var float
	 */
	public $recurMonthly;
	/**
	 * @access public
	 * @var float
	 */
	public $recurQuarterly;
	/**
	 * @access public
	 * @var float
	 */
	public $recurAnnually;
	/**
	 * @access public
	 * @var boolean
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var boolean
	 */
	public $vsoeAutoCalc;
	/**
	 * @access public
	 * @var boolean
	 */
	public $syncPartnerTeams;
	/**
	 * @access public
	 * @var SalesOrderSalesTeamList
	 */
	public $salesTeamList;
	/**
	 * @access public
	 * @var SalesOrderPartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var GiftCertRedemptionList
	 */
	public $giftCertRedemptionList;
	/**
	 * @access public
	 * @var PromotionsList
	 */
	public $promotionsList;
	/**
	 * @access public
	 * @var SalesOrderItemList
	 */
	public $itemList;
	/**
	 * @access public
	 * @var SalesOrderShipGroupList
	 */
	public $shipGroupList;
	/**
	 * @access public
	 * @var AccountingBookDetailList
	 */
	public $accountingBookDetailList;
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
		"customForm" => "RecordRef",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"currency" => "RecordRef",
		"drAccount" => "RecordRef",
		"fxAccount" => "RecordRef",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"entityTaxRegNum" => "RecordRef",
		"source" => "string",
		"createdFrom" => "RecordRef",
		"orderStatus" => "SalesOrderOrderStatus",
		"nextBill" => "dateTime",
		"opportunity" => "RecordRef",
		"salesRep" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"leadSource" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"otherRefNum" => "string",
		"memo" => "string",
		"salesEffectiveDate" => "dateTime",
		"excludeCommission" => "boolean",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"exchangeRate" => "float",
		"promoCode" => "RecordRef",
		"currencyName" => "string",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"email" => "string",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"messageSel" => "RecordRef",
		"message" => "string",
		"paymentOption" => "RecordRef",
		"inputAuthCode" => "string",
		"inputReferenceCode" => "string",
		"checkNumber" => "string",
		"paymentCardCsc" => "string",
		"paymentProcessingProfile" => "RecordRef",
		"handlingMode" => "SalesOrderHandlingMode",
		"outputAuthCode" => "string",
		"outputReferenceCode" => "string",
		"paymentOperation" => "SalesOrderPaymentOperation",
		"dynamicDescriptor" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"shipDate" => "dateTime",
		"actualShipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"shippingCost" => "float",
		"shippingTax1Rate" => "float",
		"isMultiShipTo" => "boolean",
		"shippingTax2Rate" => "string",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingTax2Rate" => "string",
		"handlingCost" => "float",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"shipComplete" => "boolean",
		"paymentMethod" => "RecordRef",
		"shopperIpAddress" => "string",
		"saveOnAuthDecline" => "boolean",
		"canHaveStackable" => "boolean",
		"creditCard" => "RecordRef",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"revCommitStatus" => "RevenueCommitStatus",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"payPalStatus" => "string",
		"creditCardProcessor" => "RecordRef",
		"payPalTranId" => "string",
		"ccApproved" => "boolean",
		"getAuth" => "boolean",
		"authCode" => "string",
		"ccAvsStreetMatch" => "AvsMatchCode",
		"ccAvsZipMatch" => "AvsMatchCode",
		"isRecurringPayment" => "boolean",
		"ccSecurityCodeMatch" => "AvsMatchCode",
		"altSalesTotal" => "float",
		"ignoreAvs" => "boolean",
		"paymentEventResult" => "TransactionPaymentEventResult",
		"paymentEventHoldReason" => "TransactionPaymentEventHoldReason",
		"paymentEventType" => "TransactionPaymentEventType",
		"paymentEventDate" => "dateTime",
		"paymentEventUpdatedBy" => "string",
		"subTotal" => "float",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"paypalAuthId" => "string",
		"balance" => "float",
		"paypalProcess" => "boolean",
		"billingSchedule" => "RecordRef",
		"ccSecurityCode" => "string",
		"threeDStatusCode" => "string",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"debitCardIssueNo" => "string",
		"lastModifiedDate" => "dateTime",
		"nexus" => "RecordRef",
		"subsidiaryTaxRegNum" => "RecordRef",
		"taxRegOverride" => "boolean",
		"taxPointDate" => "dateTime",
		"taxDetailsOverride" => "boolean",
		"location" => "RecordRef",
		"pnRefNum" => "string",
		"status" => "string",
		"tax2Total" => "float",
		"terms" => "RecordRef",
		"validFrom" => "dateTime",
		"vatRegNum" => "string",
		"giftCertApplied" => "float",
		"oneTime" => "float",
		"recurWeekly" => "float",
		"recurMonthly" => "float",
		"recurQuarterly" => "float",
		"recurAnnually" => "float",
		"tranIsVsoeBundle" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "SalesOrderSalesTeamList",
		"partnersList" => "SalesOrderPartnersList",
		"giftCertRedemptionList" => "GiftCertRedemptionList",
		"promotionsList" => "PromotionsList",
		"itemList" => "SalesOrderItemList",
		"shipGroupList" => "SalesOrderShipGroupList",
		"accountingBookDetailList" => "AccountingBookDetailList",
		"taxDetailsList" => "TaxDetailsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
