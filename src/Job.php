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
 * Job.
 */
class Job extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var RecordRef
     */
    public $entityStatus;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var JobPercentCompleteOverrideList
     */
    public $percentCompleteOverrideList;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var bool
     */
    public $billPay;
    /**
     * @var dateTime
     */
    public $dateCreated;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var RecordRef
     */
    public $workplace;
    /**
     * @var RecordRef
     */
    public $language;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $fxRate;
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
    public $phone;
    /**
     * @var string
     */
    public $altPhone;
    /**
     * @var dateTime
     */
    public $calculatedEndDate;
    /**
     * @var dateTime
     */
    public $calculatedEndDateBaseline;
    /**
     * @var dateTime
     */
    public $startDateBaseline;
    /**
     * @var dateTime
     */
    public $projectedEndDate;
    /**
     * @var dateTime
     */
    public $projectedEndDateBaseline;
    /**
     * @var dateTime
     */
    public $lastBaselineDate;
    /**
     * @var RecordRef
     */
    public $jobType;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var float
     */
    public $estimatedCost;
    /**
     * @var float
     */
    public $estimatedRevenue;
    /**
     * @var Duration
     */
    public $estimatedTime;
    /**
     * @var Duration
     */
    public $estimatedTimeOverride;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var EmailPreference
     */
    public $emailPreference;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var dateTime
     */
    public $openingBalanceDate;
    /**
     * @var RecordRef
     */
    public $openingBalanceAccount;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var JobBillingType
     */
    public $jobBillingType;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var RecordRef
     */
    public $jobItem;
    /**
     * @var float
     */
    public $percentTimeComplete;
    /**
     * @var Duration
     */
    public $actualTime;
    /**
     * @var bool
     */
    public $allowTime;
    /**
     * @var Duration
     */
    public $timeRemaining;
    /**
     * @var bool
     */
    public $limitTimeToAssignees;
    /**
     * @var float
     */
    public $estimatedLaborCost;
    /**
     * @var float
     */
    public $estimatedLaborCostBaseline;
    /**
     * @var RecordRef
     */
    public $estimateRevRecTemplate;
    /**
     * @var RecordRef
     */
    public $revRecForecastRule;
    /**
     * @var bool
     */
    public $usePercentCompleteOverride;
    /**
     * @var float
     */
    public $estimatedLaborRevenue;
    /**
     * @var float
     */
    public $estimatedGrossProfit;
    /**
     * @var float
     */
    public $estimatedGrossProfitPercent;
    /**
     * @var RecordRef
     */
    public $projectExpenseType;
    /**
     * @var bool
     */
    public $applyProjectExpenseTypeToAll;
    /**
     * @var bool
     */
    public $allowAllResourcesForTasks;
    /**
     * @var float
     */
    public $jobPrice;
    /**
     * @var bool
     */
    public $isUtilizedTime;
    /**
     * @var bool
     */
    public $isProductiveTime;
    /**
     * @var bool
     */
    public $isExemptTime;
    /**
     * @var bool
     */
    public $materializeTime;
    /**
     * @var bool
     */
    public $allowExpenses;
    /**
     * @var bool
     */
    public $allocatePayrollExpenses;
    /**
     * @var bool
     */
    public $includeCrmTasksInTotals;
    /**
     * @var GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var JobResourcesList
     */
    public $jobResourcesList;
    /**
     * @var JobPlStatementList
     */
    public $plStatementList;
    /**
     * @var JobAddressbookList
     */
    public $addressbookList;
    /**
     * @var JobMilestonesList
     */
    public $milestonesList;
    /**
     * @var JobCreditCardsList
     */
    public $creditCardsList;
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
        'customForm' => 'RecordRef',
        'entityId' => 'string',
        'altName' => 'string',
        'companyName' => 'string',
        'phoneticName' => 'string',
        'entityStatus' => 'RecordRef',
        'defaultAddress' => 'string',
        'parent' => 'RecordRef',
        'isInactive' => 'boolean',
        'percentCompleteOverrideList' => 'JobPercentCompleteOverrideList',
        'lastModifiedDate' => 'dateTime',
        'billPay' => 'boolean',
        'dateCreated' => 'dateTime',
        'category' => 'RecordRef',
        'workplace' => 'RecordRef',
        'language' => 'RecordRef',
        'comments' => 'string',
        'accountNumber' => 'string',
        'currency' => 'RecordRef',
        'fxRate' => 'float',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'phone' => 'string',
        'altPhone' => 'string',
        'calculatedEndDate' => 'dateTime',
        'calculatedEndDateBaseline' => 'dateTime',
        'startDateBaseline' => 'dateTime',
        'projectedEndDate' => 'dateTime',
        'projectedEndDateBaseline' => 'dateTime',
        'lastBaselineDate' => 'dateTime',
        'jobType' => 'RecordRef',
        'percentComplete' => 'float',
        'estimatedCost' => 'float',
        'estimatedRevenue' => 'float',
        'estimatedTime' => 'Duration',
        'estimatedTimeOverride' => 'Duration',
        'fax' => 'string',
        'email' => 'string',
        'emailPreference' => 'EmailPreference',
        'openingBalance' => 'float',
        'openingBalanceDate' => 'dateTime',
        'openingBalanceAccount' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'jobBillingType' => 'JobBillingType',
        'billingSchedule' => 'RecordRef',
        'jobItem' => 'RecordRef',
        'percentTimeComplete' => 'float',
        'actualTime' => 'Duration',
        'allowTime' => 'boolean',
        'timeRemaining' => 'Duration',
        'limitTimeToAssignees' => 'boolean',
        'estimatedLaborCost' => 'float',
        'estimatedLaborCostBaseline' => 'float',
        'estimateRevRecTemplate' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'usePercentCompleteOverride' => 'boolean',
        'estimatedLaborRevenue' => 'float',
        'estimatedGrossProfit' => 'float',
        'estimatedGrossProfitPercent' => 'float',
        'projectExpenseType' => 'RecordRef',
        'applyProjectExpenseTypeToAll' => 'boolean',
        'allowAllResourcesForTasks' => 'boolean',
        'jobPrice' => 'float',
        'isUtilizedTime' => 'boolean',
        'isProductiveTime' => 'boolean',
        'isExemptTime' => 'boolean',
        'materializeTime' => 'boolean',
        'allowExpenses' => 'boolean',
        'allocatePayrollExpenses' => 'boolean',
        'includeCrmTasksInTotals' => 'boolean',
        'globalSubscriptionStatus' => 'GlobalSubscriptionStatus',
        'jobResourcesList' => 'JobResourcesList',
        'plStatementList' => 'JobPlStatementList',
        'addressbookList' => 'JobAddressbookList',
        'milestonesList' => 'JobMilestonesList',
        'creditCardsList' => 'JobCreditCardsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
