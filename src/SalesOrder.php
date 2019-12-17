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
 * SalesOrder.
 */
class SalesOrder extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $drAccount;
    /**
     * @var RecordRef
     */
    public $fxAccount;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var string
     */
    public $source;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var SalesOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var dateTime
     */
    public $nextBill;
    /**
     * @var RecordRef
     */
    public $opportunity;
    /**
     * @var RecordRef
     */
    public $salesRep;
    /**
     * @var string
     */
    public $contribPct;
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @var bool
     */
    public $syncSalesTeams;
    /**
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var string
     */
    public $otherRefNum;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var dateTime
     */
    public $salesEffectiveDate;
    /**
     * @var bool
     */
    public $excludeCommission;
    /**
     * @var float
     */
    public $totalCostEstimate;
    /**
     * @var float
     */
    public $estGrossProfit;
    /**
     * @var float
     */
    public $estGrossProfitPercent;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var RecordRef
     */
    public $promoCode;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var RecordRef
     */
    public $discountItem;
    /**
     * @var string
     */
    public $discountRate;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var RecordRef
     */
    public $taxItem;
    /**
     * @var float
     */
    public $taxRate;
    /**
     * @var bool
     */
    public $toBePrinted;
    /**
     * @var bool
     */
    public $toBeEmailed;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $toBeFaxed;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var RecordRef
     */
    public $messageSel;
    /**
     * @var string
     */
    public $message;
    /**
     * @var RecordRef
     */
    public $paymentOption;
    /**
     * @var string
     */
    public $inputAuthCode;
    /**
     * @var string
     */
    public $inputReferenceCode;
    /**
     * @var string
     */
    public $checkNumber;
    /**
     * @var string
     */
    public $paymentCardCsc;
    /**
     * @var RecordRef
     */
    public $paymentProcessingProfile;
    /**
     * @var SalesOrderHandlingMode
     */
    public $handlingMode;
    /**
     * @var string
     */
    public $outputAuthCode;
    /**
     * @var string
     */
    public $outputReferenceCode;
    /**
     * @var SalesOrderPaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * @var Address
     */
    public $billingAddress;
    /**
     * @var RecordRef
     */
    public $billAddressList;
    /**
     * @var Address
     */
    public $shippingAddress;
    /**
     * @var bool
     */
    public $shipIsResidential;
    /**
     * @var RecordRef
     */
    public $shipAddressList;
    /**
     * @var string
     */
    public $fob;
    /**
     * @var dateTime
     */
    public $shipDate;
    /**
     * @var dateTime
     */
    public $actualShipDate;
    /**
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var bool
     */
    public $isMultiShipTo;
    /**
     * @var string
     */
    public $shippingTax2Rate;
    /**
     * @var RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var float
     */
    public $handlingTax1Rate;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var bool
     */
    public $shipComplete;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $shopperIpAddress;
    /**
     * @var bool
     */
    public $saveOnAuthDecline;
    /**
     * @var bool
     */
    public $canHaveStackable;
    /**
     * @var RecordRef
     */
    public $creditCard;
    /**
     * @var RevenueStatus
     */
    public $revenueStatus;
    /**
     * @var float
     */
    public $recognizedRevenue;
    /**
     * @var float
     */
    public $deferredRevenue;
    /**
     * @var bool
     */
    public $revRecOnRevCommitment;
    /**
     * @var RevenueCommitStatus
     */
    public $revCommitStatus;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var dateTime
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $ccName;
    /**
     * @var string
     */
    public $ccStreet;
    /**
     * @var string
     */
    public $ccZipCode;
    /**
     * @var string
     */
    public $payPalStatus;
    /**
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $payPalTranId;
    /**
     * @var bool
     */
    public $ccApproved;
    /**
     * @var bool
     */
    public $getAuth;
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var AvsMatchCode
     */
    public $ccAvsStreetMatch;
    /**
     * @var AvsMatchCode
     */
    public $ccAvsZipMatch;
    /**
     * @var bool
     */
    public $isRecurringPayment;
    /**
     * @var AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var float
     */
    public $altSalesTotal;
    /**
     * @var bool
     */
    public $ignoreAvs;
    /**
     * @var TransactionPaymentEventResult
     */
    public $paymentEventResult;
    /**
     * @var TransactionPaymentEventHoldReason
     */
    public $paymentEventHoldReason;
    /**
     * @var TransactionPaymentEventType
     */
    public $paymentEventType;
    /**
     * @var dateTime
     */
    public $paymentEventDate;
    /**
     * @var string
     */
    public $paymentEventUpdatedBy;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $discountTotal;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var float
     */
    public $altHandlingCost;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var dateTime
     */
    public $revRecStartDate;
    /**
     * @var dateTime
     */
    public $revRecEndDate;
    /**
     * @var string
     */
    public $paypalAuthId;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var bool
     */
    public $paypalProcess;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $intercoTransaction;
    /**
     * @var IntercoStatus
     */
    public $intercoStatus;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var bool
     */
    public $taxRegOverride;
    /**
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var bool
     */
    public $taxDetailsOverride;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $status;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var RecordRef
     */
    public $terms;
    /**
     * @var dateTime
     */
    public $validFrom;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var float
     */
    public $oneTime;
    /**
     * @var float
     */
    public $recurWeekly;
    /**
     * @var float
     */
    public $recurMonthly;
    /**
     * @var float
     */
    public $recurQuarterly;
    /**
     * @var float
     */
    public $recurAnnually;
    /**
     * @var bool
     */
    public $tranIsVsoeBundle;
    /**
     * @var bool
     */
    public $vsoeAutoCalc;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var SalesOrderSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var SalesOrderPartnersList
     */
    public $partnersList;
    /**
     * @var GiftCertRedemptionList
     */
    public $giftCertRedemptionList;
    /**
     * @var PromotionsList
     */
    public $promotionsList;
    /**
     * @var SalesOrderItemList
     */
    public $itemList;
    /**
     * @var SalesOrderShipGroupList
     */
    public $shipGroupList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var TaxDetailsList
     */
    public $taxDetailsList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'entity' => 'RecordRef',
        'job' => 'RecordRef',
        'currency' => 'RecordRef',
        'drAccount' => 'RecordRef',
        'fxAccount' => 'RecordRef',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'source' => 'string',
        'createdFrom' => 'RecordRef',
        'orderStatus' => 'SalesOrderOrderStatus',
        'nextBill' => 'dateTime',
        'opportunity' => 'RecordRef',
        'salesRep' => 'RecordRef',
        'contribPct' => 'string',
        'partner' => 'RecordRef',
        'salesGroup' => 'RecordRef',
        'syncSalesTeams' => 'boolean',
        'leadSource' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'otherRefNum' => 'string',
        'memo' => 'string',
        'salesEffectiveDate' => 'dateTime',
        'excludeCommission' => 'boolean',
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'exchangeRate' => 'float',
        'promoCode' => 'RecordRef',
        'currencyName' => 'string',
        'discountItem' => 'RecordRef',
        'discountRate' => 'string',
        'isTaxable' => 'boolean',
        'taxItem' => 'RecordRef',
        'taxRate' => 'float',
        'toBePrinted' => 'boolean',
        'toBeEmailed' => 'boolean',
        'email' => 'string',
        'toBeFaxed' => 'boolean',
        'fax' => 'string',
        'messageSel' => 'RecordRef',
        'message' => 'string',
        'paymentOption' => 'RecordRef',
        'inputAuthCode' => 'string',
        'inputReferenceCode' => 'string',
        'checkNumber' => 'string',
        'paymentCardCsc' => 'string',
        'paymentProcessingProfile' => 'RecordRef',
        'handlingMode' => 'SalesOrderHandlingMode',
        'outputAuthCode' => 'string',
        'outputReferenceCode' => 'string',
        'paymentOperation' => 'SalesOrderPaymentOperation',
        'dynamicDescriptor' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'shippingAddress' => 'Address',
        'shipIsResidential' => 'boolean',
        'shipAddressList' => 'RecordRef',
        'fob' => 'string',
        'shipDate' => 'dateTime',
        'actualShipDate' => 'dateTime',
        'shipMethod' => 'RecordRef',
        'shippingCost' => 'float',
        'shippingTax1Rate' => 'float',
        'isMultiShipTo' => 'boolean',
        'shippingTax2Rate' => 'string',
        'shippingTaxCode' => 'RecordRef',
        'handlingTaxCode' => 'RecordRef',
        'handlingTax1Rate' => 'float',
        'handlingTax2Rate' => 'string',
        'handlingCost' => 'float',
        'trackingNumbers' => 'string',
        'linkedTrackingNumbers' => 'string',
        'shipComplete' => 'boolean',
        'paymentMethod' => 'RecordRef',
        'shopperIpAddress' => 'string',
        'saveOnAuthDecline' => 'boolean',
        'canHaveStackable' => 'boolean',
        'creditCard' => 'RecordRef',
        'revenueStatus' => 'RevenueStatus',
        'recognizedRevenue' => 'float',
        'deferredRevenue' => 'float',
        'revRecOnRevCommitment' => 'boolean',
        'revCommitStatus' => 'RevenueCommitStatus',
        'ccNumber' => 'string',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'payPalStatus' => 'string',
        'creditCardProcessor' => 'RecordRef',
        'payPalTranId' => 'string',
        'ccApproved' => 'boolean',
        'getAuth' => 'boolean',
        'authCode' => 'string',
        'ccAvsStreetMatch' => 'AvsMatchCode',
        'ccAvsZipMatch' => 'AvsMatchCode',
        'isRecurringPayment' => 'boolean',
        'ccSecurityCodeMatch' => 'AvsMatchCode',
        'altSalesTotal' => 'float',
        'ignoreAvs' => 'boolean',
        'paymentEventResult' => 'TransactionPaymentEventResult',
        'paymentEventHoldReason' => 'TransactionPaymentEventHoldReason',
        'paymentEventType' => 'TransactionPaymentEventType',
        'paymentEventDate' => 'dateTime',
        'paymentEventUpdatedBy' => 'string',
        'subTotal' => 'float',
        'discountTotal' => 'float',
        'taxTotal' => 'float',
        'altShippingCost' => 'float',
        'altHandlingCost' => 'float',
        'total' => 'float',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'paypalAuthId' => 'string',
        'balance' => 'float',
        'paypalProcess' => 'boolean',
        'billingSchedule' => 'RecordRef',
        'ccSecurityCode' => 'string',
        'threeDStatusCode' => 'string',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'intercoTransaction' => 'RecordRef',
        'intercoStatus' => 'IntercoStatus',
        'debitCardIssueNo' => 'string',
        'lastModifiedDate' => 'dateTime',
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxPointDate' => 'dateTime',
        'taxDetailsOverride' => 'boolean',
        'location' => 'RecordRef',
        'pnRefNum' => 'string',
        'status' => 'string',
        'tax2Total' => 'float',
        'terms' => 'RecordRef',
        'validFrom' => 'dateTime',
        'vatRegNum' => 'string',
        'giftCertApplied' => 'float',
        'oneTime' => 'float',
        'recurWeekly' => 'float',
        'recurMonthly' => 'float',
        'recurQuarterly' => 'float',
        'recurAnnually' => 'float',
        'tranIsVsoeBundle' => 'boolean',
        'vsoeAutoCalc' => 'boolean',
        'syncPartnerTeams' => 'boolean',
        'salesTeamList' => 'SalesOrderSalesTeamList',
        'partnersList' => 'SalesOrderPartnersList',
        'giftCertRedemptionList' => 'GiftCertRedemptionList',
        'promotionsList' => 'PromotionsList',
        'itemList' => 'SalesOrderItemList',
        'shipGroupList' => 'SalesOrderShipGroupList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
