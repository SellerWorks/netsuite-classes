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
 * CreditMemo.
 */
class CreditMemo extends Record
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
    public $currency;
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
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $job;
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
     * @var bool
     */
    public $excludeCommission;
    /**
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $onCreditHold;
    /**
     * @var float
     */
    public $amountPaid;
    /**
     * @var dateTime
     */
    public $salesEffectiveDate;
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
     * @var string
     */
    public $currencyName;
    /**
     * @var RecordRef
     */
    public $promoCode;
    /**
     * @var float
     */
    public $amountRemaining;
    /**
     * @var RecordRef
     */
    public $discountItem;
    /**
     * @var string
     */
    public $source;
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
     * @var float
     */
    public $unapplied;
    /**
     * @var bool
     */
    public $autoApply;
    /**
     * @var float
     */
    public $applied;
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
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var string
     */
    public $shippingTax2Rate;
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
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $discountTotal;
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
     * @var float
     */
    public $altHandlingCost;
    /**
     * @var bool
     */
    public $isMultiShipTo;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @var bool
     */
    public $syncSalesTeams;
    /**
     * @var string
     */
    public $status;
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
    public $vsoeAutoCalc;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var CreditMemoSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var CreditMemoItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CreditMemoPartnersList
     */
    public $partnersList;
    /**
     * @var CreditMemoApplyList
     */
    public $applyList;
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
        'currency' => 'RecordRef',
        'entity' => 'RecordRef',
        'vatRegNum' => 'string',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'createdFrom' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'job' => 'RecordRef',
        'salesRep' => 'RecordRef',
        'partner' => 'RecordRef',
        'contribPct' => 'string',
        'otherRefNum' => 'string',
        'memo' => 'string',
        'excludeCommission' => 'boolean',
        'leadSource' => 'RecordRef',
        'balance' => 'float',
        'account' => 'RecordRef',
        'exchangeRate' => 'float',
        'onCreditHold' => 'string',
        'amountPaid' => 'float',
        'salesEffectiveDate' => 'dateTime',
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'currencyName' => 'string',
        'promoCode' => 'RecordRef',
        'amountRemaining' => 'float',
        'discountItem' => 'RecordRef',
        'source' => 'string',
        'discountRate' => 'string',
        'isTaxable' => 'boolean',
        'taxItem' => 'RecordRef',
        'taxRate' => 'float',
        'unapplied' => 'float',
        'autoApply' => 'boolean',
        'applied' => 'float',
        'toBePrinted' => 'boolean',
        'toBeEmailed' => 'boolean',
        'email' => 'string',
        'toBeFaxed' => 'boolean',
        'fax' => 'string',
        'messageSel' => 'RecordRef',
        'message' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'shipMethod' => 'RecordRef',
        'shippingCost' => 'float',
        'shippingTax1Rate' => 'float',
        'shippingTaxCode' => 'RecordRef',
        'handlingTaxCode' => 'RecordRef',
        'shippingTax2Rate' => 'string',
        'handlingTax1Rate' => 'float',
        'handlingTax2Rate' => 'string',
        'handlingCost' => 'float',
        'subTotal' => 'float',
        'discountTotal' => 'float',
        'revenueStatus' => 'RevenueStatus',
        'recognizedRevenue' => 'float',
        'deferredRevenue' => 'float',
        'revRecOnRevCommitment' => 'boolean',
        'taxTotal' => 'float',
        'tax2Total' => 'float',
        'altShippingCost' => 'float',
        'altHandlingCost' => 'float',
        'isMultiShipTo' => 'boolean',
        'total' => 'float',
        'salesGroup' => 'RecordRef',
        'syncSalesTeams' => 'boolean',
        'status' => 'string',
        'giftCert' => 'RecordRef',
        'giftCertTotal' => 'float',
        'giftCertApplied' => 'float',
        'giftCertAvailable' => 'float',
        'tranIsVsoeBundle' => 'boolean',
        'vsoeAutoCalc' => 'boolean',
        'syncPartnerTeams' => 'boolean',
        'salesTeamList' => 'CreditMemoSalesTeamList',
        'itemList' => 'CreditMemoItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'partnersList' => 'CreditMemoPartnersList',
        'applyList' => 'CreditMemoApplyList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
