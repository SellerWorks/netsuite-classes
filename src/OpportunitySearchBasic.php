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
 * OpportunitySearchBasic.
 */
class OpportunitySearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchBooleanField
     */
    public $availableOffline;
    /**
     * @var SearchMultiSelectField
     */
    public $buyingReason;
    /**
     * @var SearchMultiSelectField
     */
    public $buyingTimeFrame;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchDateField
     */
    public $closeDate;
    /**
     * @var SearchMultiSelectField
     */
    public $competitor;
    /**
     * @var SearchLongField
     */
    public $contribution;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $custType;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchLongField
     */
    public $daysOpen;
    /**
     * @var SearchLongField
     */
    public $daysToClose;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchMultiSelectField
     */
    public $entity;
    /**
     * @var SearchMultiSelectField
     */
    public $entityStatus;
    /**
     * @var SearchDoubleField
     */
    public $estimatedBudget;
    /**
     * @var SearchDateField
     */
    public $expectedCloseDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $forecastType;
    /**
     * @var SearchDoubleField
     */
    public $foreignProjectedAmount;
    /**
     * @var SearchDoubleField
     */
    public $foreignRangeHigh;
    /**
     * @var SearchDoubleField
     */
    public $foreignRangeLow;
    /**
     * @var SearchDoubleField
     */
    public $fxTranCostEstimate;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isBudgetApproved;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $leadSource;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchLongField
     */
    public $number;
    /**
     * @var SearchMultiSelectField
     */
    public $partner;
    /**
     * @var SearchLongField
     */
    public $partnerContribution;
    /**
     * @var SearchMultiSelectField
     */
    public $partnerRole;
    /**
     * @var SearchMultiSelectField
     */
    public $partnerTeamMember;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var PostingPeriodDate
     */
    public $postingPeriodRelative;
    /**
     * @var SearchLongField
     */
    public $probability;
    /**
     * @var SearchDoubleField
     */
    public $projAltSalesAmt;
    /**
     * @var SearchDoubleField
     */
    public $projectedTotal;
    /**
     * @var SearchDoubleField
     */
    public $rangeHigh;
    /**
     * @var SearchDoubleField
     */
    public $rangeHighAlt;
    /**
     * @var SearchDoubleField
     */
    public $rangeLow;
    /**
     * @var SearchDoubleField
     */
    public $rangeLowAlt;
    /**
     * @var SearchMultiSelectField
     */
    public $salesReadiness;
    /**
     * @var SearchMultiSelectField
     */
    public $salesRep;
    /**
     * @var SearchMultiSelectField
     */
    public $salesTeamMember;
    /**
     * @var SearchMultiSelectField
     */
    public $salesTeamRole;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $taxPeriod;
    /**
     * @var PostingPeriodDate
     */
    public $taxPeriodRelative;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchDoubleField
     */
    public $tranCostEstimate;
    /**
     * @var SearchDateField
     */
    public $tranDate;
    /**
     * @var SearchDoubleField
     */
    public $tranEstGrossProfit;
    /**
     * @var SearchDoubleField
     */
    public $tranEstGrossProfitPct;
    /**
     * @var SearchDoubleField
     */
    public $tranFxEstGrossProfit;
    /**
     * @var SearchStringField
     */
    public $tranId;
    /**
     * @var SearchMultiSelectField
     */
    public $winLossReason;
    /**
     * @var SearchMultiSelectField
     */
    public $wonBy;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'amount' => 'SearchDoubleField',
        'availableOffline' => 'SearchBooleanField',
        'buyingReason' => 'SearchMultiSelectField',
        'buyingTimeFrame' => 'SearchMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'closeDate' => 'SearchDateField',
        'competitor' => 'SearchMultiSelectField',
        'contribution' => 'SearchLongField',
        'currency' => 'SearchMultiSelectField',
        'custType' => 'SearchMultiSelectField',
        'dateCreated' => 'SearchDateField',
        'daysOpen' => 'SearchLongField',
        'daysToClose' => 'SearchLongField',
        'department' => 'SearchMultiSelectField',
        'entity' => 'SearchMultiSelectField',
        'entityStatus' => 'SearchMultiSelectField',
        'estimatedBudget' => 'SearchDoubleField',
        'expectedCloseDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'forecastType' => 'SearchEnumMultiSelectField',
        'foreignProjectedAmount' => 'SearchDoubleField',
        'foreignRangeHigh' => 'SearchDoubleField',
        'foreignRangeLow' => 'SearchDoubleField',
        'fxTranCostEstimate' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isBudgetApproved' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'leadSource' => 'SearchMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'number' => 'SearchLongField',
        'partner' => 'SearchMultiSelectField',
        'partnerContribution' => 'SearchLongField',
        'partnerRole' => 'SearchMultiSelectField',
        'partnerTeamMember' => 'SearchMultiSelectField',
        'postingPeriod' => 'RecordRef',
        'postingPeriodRelative' => 'PostingPeriodDate',
        'probability' => 'SearchLongField',
        'projAltSalesAmt' => 'SearchDoubleField',
        'projectedTotal' => 'SearchDoubleField',
        'rangeHigh' => 'SearchDoubleField',
        'rangeHighAlt' => 'SearchDoubleField',
        'rangeLow' => 'SearchDoubleField',
        'rangeLowAlt' => 'SearchDoubleField',
        'salesReadiness' => 'SearchMultiSelectField',
        'salesRep' => 'SearchMultiSelectField',
        'salesTeamMember' => 'SearchMultiSelectField',
        'salesTeamRole' => 'SearchMultiSelectField',
        'status' => 'SearchEnumMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxPeriod' => 'RecordRef',
        'taxPeriodRelative' => 'PostingPeriodDate',
        'title' => 'SearchStringField',
        'tranCostEstimate' => 'SearchDoubleField',
        'tranDate' => 'SearchDateField',
        'tranEstGrossProfit' => 'SearchDoubleField',
        'tranEstGrossProfitPct' => 'SearchDoubleField',
        'tranFxEstGrossProfit' => 'SearchDoubleField',
        'tranId' => 'SearchStringField',
        'winLossReason' => 'SearchMultiSelectField',
        'wonBy' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
