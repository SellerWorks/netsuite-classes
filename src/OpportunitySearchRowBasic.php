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
 * OpportunitySearchRowBasic.
 */
class OpportunitySearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $actionItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableOffline;
    /**
     * @var SearchColumnStringField[]
     */
    public $buyingReason;
    /**
     * @var SearchColumnStringField[]
     */
    public $buyingTimeFrame;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnDateField[]
     */
    public $closeDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $competitor;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $contribution;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $contributionPrimary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnStringField[]
     */
    public $custType;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysOpen;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysToClose;
    /**
     * @var SearchColumnSelectField[]
     */
    public $decisionMaker;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedBudget;
    /**
     * @var SearchColumnDateField[]
     */
    public $expectedCloseDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $forecastType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $foreignProjectedAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $foreignRangeHigh;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $foreignRangeLow;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxTranCostEstimate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isBudgetApproved;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $leadSource;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partner;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $partnerContribution;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partnerRole;
    /**
     * @var SearchColumnSelectField[]
     */
    public $partnerTeamMember;
    /**
     * @var SearchColumnStringField[]
     */
    public $period;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $probability;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $projAltSalesAmt;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $projectedTotal;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rangeHigh;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rangeHighAlt;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rangeLow;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rangeLowAlt;
    /**
     * @var SearchColumnStringField[]
     */
    public $salesReadiness;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesRep;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTeamMember;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTeamRole;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxPeriod;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $total;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $tranCostEstimate;
    /**
     * @var SearchColumnDateField[]
     */
    public $tranDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $tranEstGrossProfit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $tranEstGrossProfitPct;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $tranFxEstGrossProfit;
    /**
     * @var SearchColumnStringField[]
     */
    public $tranId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $weightedTotal;
    /**
     * @var SearchColumnSelectField[]
     */
    public $winLossReason;
    /**
     * @var SearchColumnSelectField[]
     */
    public $wonBy;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'actionItem' => 'SearchColumnStringField[]',
        'availableOffline' => 'SearchColumnBooleanField[]',
        'buyingReason' => 'SearchColumnStringField[]',
        'buyingTimeFrame' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnSelectField[]',
        'closeDate' => 'SearchColumnDateField[]',
        'competitor' => 'SearchColumnSelectField[]',
        'contribution' => 'SearchColumnDoubleField[]',
        'contributionPrimary' => 'SearchColumnDoubleField[]',
        'currency' => 'SearchColumnSelectField[]',
        'custType' => 'SearchColumnStringField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'daysOpen' => 'SearchColumnLongField[]',
        'daysToClose' => 'SearchColumnLongField[]',
        'decisionMaker' => 'SearchColumnSelectField[]',
        'department' => 'SearchColumnSelectField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'entity' => 'SearchColumnSelectField[]',
        'entityStatus' => 'SearchColumnSelectField[]',
        'estimatedBudget' => 'SearchColumnDoubleField[]',
        'expectedCloseDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'forecastType' => 'SearchColumnEnumSelectField[]',
        'foreignProjectedAmount' => 'SearchColumnDoubleField[]',
        'foreignRangeHigh' => 'SearchColumnDoubleField[]',
        'foreignRangeLow' => 'SearchColumnDoubleField[]',
        'fxTranCostEstimate' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isBudgetApproved' => 'SearchColumnBooleanField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'leadSource' => 'SearchColumnSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'partner' => 'SearchColumnSelectField[]',
        'partnerContribution' => 'SearchColumnDoubleField[]',
        'partnerRole' => 'SearchColumnSelectField[]',
        'partnerTeamMember' => 'SearchColumnSelectField[]',
        'period' => 'SearchColumnStringField[]',
        'probability' => 'SearchColumnDoubleField[]',
        'projAltSalesAmt' => 'SearchColumnDoubleField[]',
        'projectedTotal' => 'SearchColumnDoubleField[]',
        'rangeHigh' => 'SearchColumnDoubleField[]',
        'rangeHighAlt' => 'SearchColumnDoubleField[]',
        'rangeLow' => 'SearchColumnDoubleField[]',
        'rangeLowAlt' => 'SearchColumnDoubleField[]',
        'salesReadiness' => 'SearchColumnStringField[]',
        'salesRep' => 'SearchColumnSelectField[]',
        'salesTeamMember' => 'SearchColumnSelectField[]',
        'salesTeamRole' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'taxPeriod' => 'SearchColumnSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'total' => 'SearchColumnDoubleField[]',
        'tranCostEstimate' => 'SearchColumnDoubleField[]',
        'tranDate' => 'SearchColumnDateField[]',
        'tranEstGrossProfit' => 'SearchColumnDoubleField[]',
        'tranEstGrossProfitPct' => 'SearchColumnDoubleField[]',
        'tranFxEstGrossProfit' => 'SearchColumnDoubleField[]',
        'tranId' => 'SearchColumnStringField[]',
        'weightedTotal' => 'SearchColumnDoubleField[]',
        'winLossReason' => 'SearchColumnSelectField[]',
        'wonBy' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
