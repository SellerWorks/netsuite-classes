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
 * Estimate.
 */
class Estimate extends Record
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
    public $entity;
    /**
     * @var RecordRef
     */
    public $job;
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
    public $customForm;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $entityStatus;
    /**
     * @var float
     */
    public $probability;
    /**
     * @var bool
     */
    public $includeInForecast;
    /**
     * @var RecordRef
     */
    public $forecastType;
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
     * @var dateTime
     */
    public $dueDate;
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
    public $billingSchedule;
    /**
     * @var string
     */
    public $status;
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
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var dateTime
     */
    public $expectedCloseDate;
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
    public $endDate;
    /**
     * @var dateTime
     */
    public $startDate;
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
    public $createdFrom;
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
     * @var string
     */
    public $vatRegNum;
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
     * @var bool
     */
    public $visibleToCustomer;
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
     * @var RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var string
     */
    public $shippingTax2Rate;
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
    public $trackingNumbers;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var RecordRef
     */
    public $salesGroup;
    /**
     * @var bool
     */
    public $syncSalesTeams;
    /**
     * @var float
     */
    public $altSalesTotal;
    /**
     * @var bool
     */
    public $canHaveStackable;
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
     * @var float
     */
    public $tax2Total;
    /**
     * @var EstimateItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var EstimateSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var EstimatePartnersList
     */
    public $partnersList;
    /**
     * @var PromotionsList
     */
    public $promotionsList;
    /**
     * @var EstimateShipGroupList
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

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'entity' => 'RecordRef',
        'job' => 'RecordRef',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'source' => 'string',
        'customForm' => 'RecordRef',
        'currency' => 'RecordRef',
        'title' => 'string',
        'entityStatus' => 'RecordRef',
        'probability' => 'float',
        'includeInForecast' => 'boolean',
        'forecastType' => 'RecordRef',
        'opportunity' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'terms' => 'RecordRef',
        'dueDate' => 'dateTime',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'status' => 'string',
        'salesRep' => 'RecordRef',
        'partner' => 'RecordRef',
        'contribPct' => 'string',
        'leadSource' => 'RecordRef',
        'expectedCloseDate' => 'dateTime',
        'otherRefNum' => 'string',
        'memo' => 'string',
        'endDate' => 'dateTime',
        'startDate' => 'dateTime',
        'totalCostEstimate' => 'float',
        'estGrossProfit' => 'float',
        'estGrossProfitPercent' => 'float',
        'createdFrom' => 'RecordRef',
        'exchangeRate' => 'float',
        'currencyName' => 'string',
        'promoCode' => 'RecordRef',
        'discountItem' => 'RecordRef',
        'discountRate' => 'string',
        'isTaxable' => 'boolean',
        'taxItem' => 'RecordRef',
        'taxRate' => 'float',
        'vatRegNum' => 'string',
        'toBePrinted' => 'boolean',
        'toBeEmailed' => 'boolean',
        'email' => 'string',
        'toBeFaxed' => 'boolean',
        'fax' => 'string',
        'visibleToCustomer' => 'boolean',
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
        'shippingTaxCode' => 'RecordRef',
        'shippingTax2Rate' => 'string',
        'handlingTaxCode' => 'RecordRef',
        'handlingTax1Rate' => 'float',
        'handlingCost' => 'float',
        'trackingNumbers' => 'string',
        'handlingTax2Rate' => 'string',
        'linkedTrackingNumbers' => 'string',
        'salesGroup' => 'RecordRef',
        'syncSalesTeams' => 'boolean',
        'altSalesTotal' => 'float',
        'canHaveStackable' => 'boolean',
        'oneTime' => 'float',
        'recurWeekly' => 'float',
        'recurMonthly' => 'float',
        'recurQuarterly' => 'float',
        'recurAnnually' => 'float',
        'subTotal' => 'float',
        'discountTotal' => 'float',
        'taxTotal' => 'float',
        'altShippingCost' => 'float',
        'altHandlingCost' => 'float',
        'total' => 'float',
        'tax2Total' => 'float',
        'itemList' => 'EstimateItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'salesTeamList' => 'EstimateSalesTeamList',
        'syncPartnerTeams' => 'boolean',
        'partnersList' => 'EstimatePartnersList',
        'promotionsList' => 'PromotionsList',
        'shipGroupList' => 'EstimateShipGroupList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
