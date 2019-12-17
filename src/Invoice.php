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
 * Invoice.
 */
class Invoice extends Record
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
    public $nextApprover;
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
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
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
    public $terms;
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
    public $currency;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var dateTime
     */
    public $discountDate;
    /**
     * @var float
     */
    public $discountAmount;
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
     * @var float
     */
    public $amountPaid;
    /**
     * @var float
     */
    public $amountRemaining;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var string
     */
    public $onCreditHold;
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
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var bool
     */
    public $canHaveStackable;
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
     * @var string
     */
    public $status;
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
     * @var string
     */
    public $vatRegNum;
    /**
     * @var RecordRef
     */
    public $expCostDiscount;
    /**
     * @var RecordRef
     */
    public $itemCostDiscount;
    /**
     * @var RecordRef
     */
    public $timeDiscount;
    /**
     * @var string
     */
    public $expCostDiscRate;
    /**
     * @var string
     */
    public $itemCostDiscRate;
    /**
     * @var string
     */
    public $timeDiscRate;
    /**
     * @var float
     */
    public $expCostDiscAmount;
    /**
     * @var float
     */
    public $expCostTaxRate1;
    /**
     * @var float
     */
    public $expCostTaxRate2;
    /**
     * @var float
     */
    public $itemCostDiscAmount;
    /**
     * @var RecordRef
     */
    public $expCostTaxCode;
    /**
     * @var float
     */
    public $expCostDiscTax1Amt;
    /**
     * @var float
     */
    public $itemCostTaxRate1;
    /**
     * @var float
     */
    public $timeDiscAmount;
    /**
     * @var RecordRef
     */
    public $itemCostTaxCode;
    /**
     * @var bool
     */
    public $expCostDiscTaxable;
    /**
     * @var bool
     */
    public $itemCostDiscTaxable;
    /**
     * @var float
     */
    public $itemCostTaxRate2;
    /**
     * @var float
     */
    public $itemCostDiscTax1Amt;
    /**
     * @var bool
     */
    public $itemCostDiscPrint;
    /**
     * @var bool
     */
    public $timeDiscTaxable;
    /**
     * @var float
     */
    public $timeTaxRate1;
    /**
     * @var bool
     */
    public $expCostDiscPrint;
    /**
     * @var RecordRef
     */
    public $timeTaxCode;
    /**
     * @var bool
     */
    public $timeDiscPrint;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var float
     */
    public $timeDiscTax1Amt;
    /**
     * @var bool
     */
    public $tranIsVsoeBundle;
    /**
     * @var float
     */
    public $timeTaxRate2;
    /**
     * @var bool
     */
    public $vsoeAutoCalc;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var InvoiceSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var InvoicePartnersList
     */
    public $partnersList;
    /**
     * @var InvoiceItemList
     */
    public $itemList;
    /**
     * @var InvoiceItemCostList
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
     * @var InvoiceExpCostList
     */
    public $expCostList;
    /**
     * @var InvoiceTimeList
     */
    public $timeList;
    /**
     * @var InvoiceShipGroupList
     */
    public $shipGroupList;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
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
        'lastModifiedDate' => 'dateTime',
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'customForm' => 'RecordRef',
        'nextApprover' => 'RecordRef',
        'entity' => 'RecordRef',
        'billingAccount' => 'RecordRef',
        'recurringBill' => 'boolean',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'source' => 'string',
        'createdFrom' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'opportunity' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'terms' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'currency' => 'RecordRef',
        'dueDate' => 'dateTime',
        'discountDate' => 'dateTime',
        'discountAmount' => 'float',
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
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'revRecSchedule' => 'RecordRef',
        'revRecStartDate' => 'dateTime',
        'revRecEndDate' => 'dateTime',
        'amountPaid' => 'float',
        'amountRemaining' => 'float',
        'balance' => 'float',
        'account' => 'RecordRef',
        'onCreditHold' => 'string',
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
        'trackingNumbers' => 'string',
        'linkedTrackingNumbers' => 'string',
        'salesGroup' => 'RecordRef',
        'subTotal' => 'float',
        'canHaveStackable' => 'boolean',
        'revenueStatus' => 'RevenueStatus',
        'recognizedRevenue' => 'float',
        'deferredRevenue' => 'float',
        'revRecOnRevCommitment' => 'boolean',
        'syncSalesTeams' => 'boolean',
        'discountTotal' => 'float',
        'taxTotal' => 'float',
        'altShippingCost' => 'float',
        'altHandlingCost' => 'float',
        'total' => 'float',
        'status' => 'string',
        'job' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'email' => 'string',
        'tax2Total' => 'float',
        'vatRegNum' => 'string',
        'expCostDiscount' => 'RecordRef',
        'itemCostDiscount' => 'RecordRef',
        'timeDiscount' => 'RecordRef',
        'expCostDiscRate' => 'string',
        'itemCostDiscRate' => 'string',
        'timeDiscRate' => 'string',
        'expCostDiscAmount' => 'float',
        'expCostTaxRate1' => 'float',
        'expCostTaxRate2' => 'float',
        'itemCostDiscAmount' => 'float',
        'expCostTaxCode' => 'RecordRef',
        'expCostDiscTax1Amt' => 'float',
        'itemCostTaxRate1' => 'float',
        'timeDiscAmount' => 'float',
        'itemCostTaxCode' => 'RecordRef',
        'expCostDiscTaxable' => 'boolean',
        'itemCostDiscTaxable' => 'boolean',
        'itemCostTaxRate2' => 'float',
        'itemCostDiscTax1Amt' => 'float',
        'itemCostDiscPrint' => 'boolean',
        'timeDiscTaxable' => 'boolean',
        'timeTaxRate1' => 'float',
        'expCostDiscPrint' => 'boolean',
        'timeTaxCode' => 'RecordRef',
        'timeDiscPrint' => 'boolean',
        'giftCertApplied' => 'float',
        'timeDiscTax1Amt' => 'float',
        'tranIsVsoeBundle' => 'boolean',
        'timeTaxRate2' => 'float',
        'vsoeAutoCalc' => 'boolean',
        'syncPartnerTeams' => 'boolean',
        'salesTeamList' => 'InvoiceSalesTeamList',
        'partnersList' => 'InvoicePartnersList',
        'itemList' => 'InvoiceItemList',
        'itemCostList' => 'InvoiceItemCostList',
        'giftCertRedemptionList' => 'GiftCertRedemptionList',
        'promotionsList' => 'PromotionsList',
        'expCostList' => 'InvoiceExpCostList',
        'timeList' => 'InvoiceTimeList',
        'shipGroupList' => 'InvoiceShipGroupList',
        'approvalStatus' => 'RecordRef',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
