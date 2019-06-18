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
 * CashSale.
 */
class CashSale extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
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
     * @var bool
     */
    public $taxDetailsOverride;
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
    public $billingAccount;
    /**
     * @var bool
     */
    public $recurringBill;
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
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var string
     */
    public $source;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $opportunity;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $subsidiary;
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
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var bool
     */
    public $undepFunds;
    /**
     * @var bool
     */
    public $canHaveStackable;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var dateTime
     */
    public $revRecStartDate;
    /**
     * @var dateTime
     */
    public $revRecEndDate;
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
     * @var string
     */
    public $currencyName;
    /**
     * @var RecordRef
     */
    public $promoCode;
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
     * @var CashSaleHandlingMode
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
     * @var CashSalePaymentOperation
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
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var RecordRef
     */
    public $salesGroup;
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
     * @var bool
     */
    public $syncSalesTeams;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $payPalStatus;
    /**
     * @var RecordRef
     */
    public $creditCard;
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
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var bool
     */
    public $ccApproved;
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
     * @var string
     */
    public $payPalTranId;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var bool
     */
    public $ccIsPurchaseCardBin;
    /**
     * @var bool
     */
    public $ignoreAvs;
    /**
     * @var bool
     */
    public $ccProcessAsPurchaseCard;
    /**
     * @var RecordRef
     */
    public $itemCostDiscount;
    /**
     * @var string
     */
    public $itemCostDiscRate;
    /**
     * @var float
     */
    public $itemCostDiscAmount;
    /**
     * @var float
     */
    public $itemCostTaxRate1;
    /**
     * @var float
     */
    public $itemCostTaxRate2;
    /**
     * @var bool
     */
    public $itemCostDiscTaxable;
    /**
     * @var RecordRef
     */
    public $itemCostTaxCode;
    /**
     * @var float
     */
    public $itemCostDiscTax1Amt;
    /**
     * @var bool
     */
    public $itemCostDiscPrint;
    /**
     * @var RecordRef
     */
    public $expCostDiscount;
    /**
     * @var string
     */
    public $expCostDiscRate;
    /**
     * @var float
     */
    public $expCostDiscAmount;
    /**
     * @var bool
     */
    public $expCostDiscTaxable;
    /**
     * @var bool
     */
    public $expCostDiscprint;
    /**
     * @var float
     */
    public $expCostTaxRate1;
    /**
     * @var RecordRef
     */
    public $timeDiscount;
    /**
     * @var RecordRef
     */
    public $expCostTaxCode;
    /**
     * @var string
     */
    public $timeDiscRate;
    /**
     * @var float
     */
    public $expCostTaxRate2;
    /**
     * @var float
     */
    public $expCostDiscTax1Amt;
    /**
     * @var float
     */
    public $timeDiscAmount;
    /**
     * @var bool
     */
    public $timeDiscTaxable;
    /**
     * @var bool
     */
    public $timeDiscPrint;
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
    public $timeTaxRate1;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var RecordRef
     */
    public $timeTaxCode;
    /**
     * @var float
     */
    public $altHandlingCost;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $timeDiscTax1Amt;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var float
     */
    public $timeTaxRate2;
    /**
     * @var AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var bool
     */
    public $chargeIt;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $paypalAuthId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var bool
     */
    public $paypalProcess;
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var string
     */
    public $email;
    /**
     * @var float
     */
    public $tax2Total;
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
     * @var CashSaleSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var CashSalePartnersList
     */
    public $partnersList;
    /**
     * @var CashSaleItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CashSaleItemCostList
     */
    public $itemCostList;
    /**
     * @var GiftCertRedemptionList
     */
    public $giftCertRedemptionList;
    /**
     * @var PromotionsList
     */
    public $promotionsList;
    /**
     * @var CashSaleExpCostList
     */
    public $expCostList;
    /**
     * @var CashSaleTimeList
     */
    public $timeList;
    /**
     * @var CashSaleShipGroupList
     */
    public $shipGroupList;
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'customForm' => 'RecordRef',
        'entity' => 'RecordRef',
        'billingAccount' => 'RecordRef',
        'recurringBill' => 'boolean',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'source' => 'string',
        'postingPeriod' => 'RecordRef',
        'createdFrom' => 'RecordRef',
        'opportunity' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'salesRep' => 'RecordRef',
        'contribPct' => 'string',
        'partner' => 'RecordRef',
        'leadSource' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'otherRefNum' => 'string',
        'memo' => 'string',
        'salesEffectiveDate' => 'dateTime',
        'excludeCommission' => 'boolean',
        'revRecSchedule' => 'RecordRef',
        'undepFunds' => 'boolean',
        'canHaveStackable' => 'boolean',
        'currency' => 'RecordRef',
        'account' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'exchangeRate' => 'float',
        'currencyName' => 'string',
        'promoCode' => 'RecordRef',
        'discountItem' => 'RecordRef',
        'discountRate' => 'string',
        'isTaxable' => 'boolean',
        'taxItem' => 'RecordRef',
        'taxRate' => 'float',
        'toBePrinted' => 'boolean',
        'toBeEmailed' => 'boolean',
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
        'handlingMode' => 'CashSaleHandlingMode',
        'outputAuthCode' => 'string',
        'outputReferenceCode' => 'string',
        'paymentOperation' => 'CashSalePaymentOperation',
        'dynamicDescriptor' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'shippingAddress' => 'Address',
        'shipIsResidential' => 'boolean',
        'shipAddressList' => 'RecordRef',
        'fob' => 'string',
        'shipDate' => 'dateTime',
        'shipMethod' => 'RecordRef',
        'shippingCost' => 'float',
        'shippingTax1Rate' => 'float',
        'shippingTax2Rate' => 'string',
        'shippingTaxCode' => 'RecordRef',
        'handlingTaxCode' => 'RecordRef',
        'handlingTax1Rate' => 'float',
        'handlingCost' => 'float',
        'handlingTax2Rate' => 'string',
        'linkedTrackingNumbers' => 'string',
        'trackingNumbers' => 'string',
        'salesGroup' => 'RecordRef',
        'revenueStatus' => 'RevenueStatus',
        'recognizedRevenue' => 'float',
        'deferredRevenue' => 'float',
        'revRecOnRevCommitment' => 'boolean',
        'syncSalesTeams' => 'boolean',
        'paymentMethod' => 'RecordRef',
        'payPalStatus' => 'string',
        'creditCard' => 'RecordRef',
        'ccNumber' => 'string',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'creditCardProcessor' => 'RecordRef',
        'ccApproved' => 'boolean',
        'authCode' => 'string',
        'ccAvsStreetMatch' => 'AvsMatchCode',
        'ccAvsZipMatch' => 'AvsMatchCode',
        'isRecurringPayment' => 'boolean',
        'payPalTranId' => 'string',
        'subTotal' => 'float',
        'ccIsPurchaseCardBin' => 'boolean',
        'ignoreAvs' => 'boolean',
        'ccProcessAsPurchaseCard' => 'boolean',
        'itemCostDiscount' => 'RecordRef',
        'itemCostDiscRate' => 'string',
        'itemCostDiscAmount' => 'float',
        'itemCostTaxRate1' => 'float',
        'itemCostTaxRate2' => 'float',
        'itemCostDiscTaxable' => 'boolean',
        'itemCostTaxCode' => 'RecordRef',
        'itemCostDiscTax1Amt' => 'float',
        'itemCostDiscPrint' => 'boolean',
        'expCostDiscount' => 'RecordRef',
        'expCostDiscRate' => 'string',
        'expCostDiscAmount' => 'float',
        'expCostDiscTaxable' => 'boolean',
        'expCostDiscprint' => 'boolean',
        'expCostTaxRate1' => 'float',
        'timeDiscount' => 'RecordRef',
        'expCostTaxCode' => 'RecordRef',
        'timeDiscRate' => 'string',
        'expCostTaxRate2' => 'float',
        'expCostDiscTax1Amt' => 'float',
        'timeDiscAmount' => 'float',
        'timeDiscTaxable' => 'boolean',
        'timeDiscPrint' => 'boolean',
        'discountTotal' => 'float',
        'taxTotal' => 'float',
        'timeTaxRate1' => 'float',
        'altShippingCost' => 'float',
        'timeTaxCode' => 'RecordRef',
        'altHandlingCost' => 'float',
        'total' => 'float',
        'timeDiscTax1Amt' => 'float',
        'ccSecurityCode' => 'string',
        'timeTaxRate2' => 'float',
        'ccSecurityCodeMatch' => 'AvsMatchCode',
        'chargeIt' => 'boolean',
        'debitCardIssueNo' => 'string',
        'threeDStatusCode' => 'string',
        'pnRefNum' => 'string',
        'paypalAuthId' => 'string',
        'status' => 'string',
        'paypalProcess' => 'boolean',
        'job' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'email' => 'string',
        'tax2Total' => 'float',
        'validFrom' => 'dateTime',
        'vatRegNum' => 'string',
        'giftCertApplied' => 'float',
        'tranIsVsoeBundle' => 'boolean',
        'vsoeAutoCalc' => 'boolean',
        'syncPartnerTeams' => 'boolean',
        'salesTeamList' => 'CashSaleSalesTeamList',
        'partnersList' => 'CashSalePartnersList',
        'itemList' => 'CashSaleItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'itemCostList' => 'CashSaleItemCostList',
        'giftCertRedemptionList' => 'GiftCertRedemptionList',
        'promotionsList' => 'PromotionsList',
        'expCostList' => 'CashSaleExpCostList',
        'timeList' => 'CashSaleTimeList',
        'shipGroupList' => 'CashSaleShipGroupList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
