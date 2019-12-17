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
 * CashRefund.
 */
class CashRefund extends Record
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
     * @var string
     */
    public $vatRegNum;
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
    public $leadSource;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $salesRep;
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var string
     */
    public $contribPct;
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
    public $refundCheck;
    /**
     * @var bool
     */
    public $toPrint2;
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
    public $account;
    /**
     * @var RecordRef
     */
    public $currency;
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
     * @var CashRefundHandlingMode
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
     * @var CashRefundPaymentOperation
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
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var string
     */
    public $shippingTax2Rate;
    /**
     * @var float
     */
    public $shippingCost;
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
    public $paymentMethod;
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
     * @var RecordRef
     */
    public $creditCard;
    /**
     * @var bool
     */
    public $chargeIt;
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
     * @var bool
     */
    public $ccApproved;
    /**
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var dateTime
     */
    public $validFrom;
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
     * @var float
     */
    public $discountTotal;
    /**
     * @var bool
     */
    public $ccProcessAsPurchaseCard;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var string
     */
    public $payPalStatus;
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
    public $payPalAuthId;
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
    public $giftCert;
    /**
     * @var float
     */
    public $giftCertTotal;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var float
     */
    public $giftCertAvailable;
    /**
     * @var bool
     */
    public $tranIsVsoeBundle;
    /**
     * @var bool
     */
    public $payPalProcess;
    /**
     * @var bool
     */
    public $vsoeAutoCalc;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var CashRefundItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CashRefundSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var CashRefundPartnersList
     */
    public $partnersList;
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
        'entity' => 'RecordRef',
        'vatRegNum' => 'string',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'source' => 'string',
        'createdFrom' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'leadSource' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'salesRep' => 'RecordRef',
        'partner' => 'RecordRef',
        'contribPct' => 'string',
        'otherRefNum' => 'string',
        'memo' => 'string',
        'salesEffectiveDate' => 'dateTime',
        'refundCheck' => 'boolean',
        'toPrint2' => 'boolean',
        'excludeCommission' => 'boolean',
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'account' => 'RecordRef',
        'currency' => 'RecordRef',
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
        'handlingMode' => 'CashRefundHandlingMode',
        'outputAuthCode' => 'string',
        'outputReferenceCode' => 'string',
        'paymentOperation' => 'CashRefundPaymentOperation',
        'dynamicDescriptor' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'shipMethod' => 'RecordRef',
        'shippingTaxCode' => 'RecordRef',
        'shippingTax1Rate' => 'float',
        'shippingTax2Rate' => 'string',
        'shippingCost' => 'float',
        'handlingTaxCode' => 'RecordRef',
        'handlingTax1Rate' => 'float',
        'handlingTax2Rate' => 'string',
        'handlingCost' => 'float',
        'salesGroup' => 'RecordRef',
        'syncSalesTeams' => 'boolean',
        'paymentMethod' => 'RecordRef',
        'revenueStatus' => 'RevenueStatus',
        'recognizedRevenue' => 'float',
        'deferredRevenue' => 'float',
        'revRecOnRevCommitment' => 'boolean',
        'creditCard' => 'RecordRef',
        'chargeIt' => 'boolean',
        'ccNumber' => 'string',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'ccApproved' => 'boolean',
        'creditCardProcessor' => 'RecordRef',
        'debitCardIssueNo' => 'string',
        'pnRefNum' => 'string',
        'validFrom' => 'dateTime',
        'payPalTranId' => 'string',
        'subTotal' => 'float',
        'ccIsPurchaseCardBin' => 'boolean',
        'discountTotal' => 'float',
        'ccProcessAsPurchaseCard' => 'boolean',
        'taxTotal' => 'float',
        'tax2Total' => 'float',
        'altShippingCost' => 'float',
        'payPalStatus' => 'string',
        'altHandlingCost' => 'float',
        'total' => 'float',
        'payPalAuthId' => 'string',
        'status' => 'string',
        'job' => 'RecordRef',
        'giftCert' => 'RecordRef',
        'giftCertTotal' => 'float',
        'giftCertApplied' => 'float',
        'giftCertAvailable' => 'float',
        'tranIsVsoeBundle' => 'boolean',
        'payPalProcess' => 'boolean',
        'vsoeAutoCalc' => 'boolean',
        'syncPartnerTeams' => 'boolean',
        'itemList' => 'CashRefundItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'salesTeamList' => 'CashRefundSalesTeamList',
        'partnersList' => 'CashRefundPartnersList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
