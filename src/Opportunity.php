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
 * Opportunity.
 */
class Opportunity extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $estimatedBudget;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var string
     */
    public $title;
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
     * @var string
     */
    public $source;
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
     * @var RecordRef
     */
    public $entityStatus;
    /**
     * @var float
     */
    public $probability;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var dateTime
     */
    public $expectedCloseDate;
    /**
     * @var int
     */
    public $daysOpen;
    /**
     * @var RecordRef
     */
    public $forecastType;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var float
     */
    public $projectedTotal;
    /**
     * @var float
     */
    public $rangeLow;
    /**
     * @var float
     */
    public $rangeHigh;
    /**
     * @var float
     */
    public $projAltSalesAmt;
    /**
     * @var float
     */
    public $altSalesRangeLow;
    /**
     * @var float
     */
    public $altSalesRangeHigh;
    /**
     * @var float
     */
    public $weightedTotal;
    /**
     * @var string
     */
    public $actionItem;
    /**
     * @var RecordRef
     */
    public $winLossReason;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var bool
     */
    public $isBudgetApproved;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var RecordRef
     */
    public $salesReadiness;
    /**
     * @var float
     */
    public $totalCostEstimate;
    /**
     * @var RecordRef
     */
    public $buyingTimeFrame;
    /**
     * @var float
     */
    public $estGrossProfit;
    /**
     * @var RecordRef
     */
    public $buyingReason;
    /**
     * @var float
     */
    public $estGrossProfitPercent;
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
     * @var RecordRef
     */
    public $class;
    /**
     * @var dateTime
     */
    public $closeDate;
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
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var bool
     */
    public $syncPartnerTeams;
    /**
     * @var OpportunitySalesTeamList
     */
    public $salesTeamList;
    /**
     * @var OpportunityPartnersList
     */
    public $partnersList;
    /**
     * @var OpportunityItemList
     */
    public $itemList;
    /**
     * @var OpportunityCompetitorsList
     */
    public $competitorsList;
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
        'customForm' => 'RecordRef',
        'currency' => 'RecordRef',
        'estimatedBudget' => 'float',
        'entity' => 'RecordRef',
        'job' => 'RecordRef',
        'title' => 'string',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'oneTime' => 'float',
        'recurWeekly' => 'float',
        'recurMonthly' => 'float',
        'recurQuarterly' => 'float',
        'recurAnnually' => 'float',
        'source' => 'string',
        'salesRep' => 'RecordRef',
        'contribPct' => 'string',
        'partner' => 'RecordRef',
        'salesGroup' => 'RecordRef',
        'syncSalesTeams' => 'boolean',
        'leadSource' => 'RecordRef',
        'entityStatus' => 'RecordRef',
        'probability' => 'float',
        'tranDate' => 'dateTime',
        'expectedCloseDate' => 'dateTime',
        'daysOpen' => 'integer',
        'forecastType' => 'RecordRef',
        'currencyName' => 'string',
        'exchangeRate' => 'float',
        'projectedTotal' => 'float',
        'rangeLow' => 'float',
        'rangeHigh' => 'float',
        'projAltSalesAmt' => 'float',
        'altSalesRangeLow' => 'float',
        'altSalesRangeHigh' => 'float',
        'weightedTotal' => 'float',
        'actionItem' => 'string',
        'winLossReason' => 'RecordRef',
        'memo' => 'string',
        'taxTotal' => 'float',
        'isBudgetApproved' => 'boolean',
        'tax2Total' => 'float',
        'salesReadiness' => 'RecordRef',
        'totalCostEstimate' => 'float',
        'buyingTimeFrame' => 'RecordRef',
        'estGrossProfit' => 'float',
        'buyingReason' => 'RecordRef',
        'estGrossProfitPercent' => 'float',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'shippingAddress' => 'Address',
        'shipIsResidential' => 'boolean',
        'shipAddressList' => 'RecordRef',
        'class' => 'RecordRef',
        'closeDate' => 'dateTime',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'status' => 'string',
        'vatRegNum' => 'string',
        'syncPartnerTeams' => 'boolean',
        'salesTeamList' => 'OpportunitySalesTeamList',
        'partnersList' => 'OpportunityPartnersList',
        'itemList' => 'OpportunityItemList',
        'competitorsList' => 'OpportunityCompetitorsList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
