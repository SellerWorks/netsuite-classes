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
 * CustomSale
 */
class CustomSale extends Record
{
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
    public $tranType;
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
    public $billingAccount;
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
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @access public
     * @var RecordRef
     */
    public $opportunity;
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
    public $terms;
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
    public $currency;
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
     * @var float
     */
    public $discountAmount;
    /**
     * @access public
     * @var RecordRef
     */
    public $salesRep;
    /**
     * @access public
     * @var RecordRef
     */
    public $partner;
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
     * @var RecordRef
     */
    public $tranStatus;
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
     * @var RecordRef
     */
    public $account;
    /**
     * @access public
     * @var float
     */
    public $exchangeRate;
    /**
     * @access public
     * @var string
     */
    public $currencyName;
    /**
     * @access public
     * @var RecordRef
     */
    public $promoCode;
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
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @access public
     * @var float
     */
    public $subTotal;
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
     * @var boolean
     */
    public $syncSalesTeams;
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
     * @var string
     */
    public $status;
    /**
     * @access public
     * @var RecordRef
     */
    public $job;
    /**
     * @access public
     * @var string
     */
    public $email;
    /**
     * @access public
     * @var float
     */
    public $giftCertApplied;
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
     * @var CustomSalePartnersList
     */
    public $partnersList;
    /**
     * @access public
     * @var CustomSaleItemList
     */
    public $itemList;
    /**
     * @access public
     * @var GiftCertRedemptionList
     */
    public $giftCertRedemptionList;
    /**
     * @access public
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @access public
     * @var CustomSaleSalesTeamList
     */
    public $salesTeamList;
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

    public static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "tranType" => "RecordRef",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "terms" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "currency" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "discountAmount" => "float",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "account" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "subTotal" => "float",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "syncSalesTeams" => "boolean",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "status" => "string",
        "job" => "RecordRef",
        "email" => "string",
        "giftCertApplied" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "partnersList" => "CustomSalePartnersList",
        "itemList" => "CustomSaleItemList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "CustomSaleSalesTeamList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
