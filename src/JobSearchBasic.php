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
 * JobSearchBasic.
 */
class JobSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $accountNumber;
    /**
     * @var SearchDoubleField
     */
    public $actualTime;
    /**
     * @var SearchStringField
     */
    public $address;
    /**
     * @var SearchStringField
     */
    public $addressee;
    /**
     * @var SearchStringField
     */
    public $addressLabel;
    /**
     * @var SearchStringField
     */
    public $addressPhone;
    /**
     * @var SearchBooleanField
     */
    public $allocatePayrollExpenses;
    /**
     * @var SearchBooleanField
     */
    public $allowAllResourcesForTasks;
    /**
     * @var SearchBooleanField
     */
    public $allowExpenses;
    /**
     * @var SearchBooleanField
     */
    public $allowTime;
    /**
     * @var SearchBooleanField
     */
    public $applyProjectExpenseTypeToAll;
    /**
     * @var SearchStringField
     */
    public $attention;
    /**
     * @var SearchMultiSelectField
     */
    public $billingSchedule;
    /**
     * @var SearchDateField
     */
    public $calculatedEndDate;
    /**
     * @var SearchDateField
     */
    public $calculatedEndDateBaseline;
    /**
     * @var SearchMultiSelectField
     */
    public $category;
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchStringField
     */
    public $comments;
    /**
     * @var SearchStringField
     */
    public $contact;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $county;
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchStringField
     */
    public $entityId;
    /**
     * @var SearchDoubleField
     */
    public $estCost;
    /**
     * @var SearchDateField
     */
    public $estEndDate;
    /**
     * @var SearchDoubleField
     */
    public $estimatedGrossProfit;
    /**
     * @var SearchDoubleField
     */
    public $estimatedGrossProfitPercent;
    /**
     * @var SearchDoubleField
     */
    public $estimatedLaborCost;
    /**
     * @var SearchDoubleField
     */
    public $estimatedLaborCostBaseline;
    /**
     * @var SearchDoubleField
     */
    public $estimatedLaborRevenue;
    /**
     * @var SearchDoubleField
     */
    public $estimatedTime;
    /**
     * @var SearchDoubleField
     */
    public $estimatedTimeOverride;
    /**
     * @var SearchDoubleField
     */
    public $estimatedTimeOverrideBaseline;
    /**
     * @var SearchDoubleField
     */
    public $estRevenue;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchStringField
     */
    public $fax;
    /**
     * @var SearchBooleanField
     */
    public $giveAccess;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchStringField
     */
    public $image;
    /**
     * @var SearchBooleanField
     */
    public $includeCrmTasksInTotals;
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
    public $isDefaultBilling;
    /**
     * @var SearchBooleanField
     */
    public $isDefaultShipping;
    /**
     * @var SearchBooleanField
     */
    public $isExemptTime;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isProductiveTime;
    /**
     * @var SearchBooleanField
     */
    public $isUtilizedTime;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $jobBillingType;
    /**
     * @var SearchMultiSelectField
     */
    public $jobItem;
    /**
     * @var SearchDoubleField
     */
    public $jobPrice;
    /**
     * @var SearchMultiSelectField
     */
    public $jobResource;
    /**
     * @var SearchMultiSelectField
     */
    public $jobResourceRole;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var SearchDateField
     */
    public $lastBaselineDate;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var SearchBooleanField
     */
    public $limitTimeToAssignees;
    /**
     * @var SearchBooleanField
     */
    public $materializeTime;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchLongField
     */
    public $pctComplete;
    /**
     * @var SearchLongField
     */
    public $percentTimeComplete;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $permission;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchStringField
     */
    public $phoneticName;
    /**
     * @var SearchDateField
     */
    public $projectedEndDateBaseline;
    /**
     * @var SearchMultiSelectField
     */
    public $projectExpenseType;
    /**
     * @var SearchMultiSelectField
     */
    public $revRecForecastRule;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchDateField
     */
    public $startDateBaseline;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchDoubleField
     */
    public $timeRemaining;
    /**
     * @var SearchMultiSelectField
     */
    public $type;
    /**
     * @var SearchBooleanField
     */
    public $usePercentCompleteOverride;
    /**
     * @var SearchStringField
     */
    public $zipCode;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountNumber' => 'SearchStringField',
        'actualTime' => 'SearchDoubleField',
        'address' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'addressLabel' => 'SearchStringField',
        'addressPhone' => 'SearchStringField',
        'allocatePayrollExpenses' => 'SearchBooleanField',
        'allowAllResourcesForTasks' => 'SearchBooleanField',
        'allowExpenses' => 'SearchBooleanField',
        'allowTime' => 'SearchBooleanField',
        'applyProjectExpenseTypeToAll' => 'SearchBooleanField',
        'attention' => 'SearchStringField',
        'billingSchedule' => 'SearchMultiSelectField',
        'calculatedEndDate' => 'SearchDateField',
        'calculatedEndDateBaseline' => 'SearchDateField',
        'category' => 'SearchMultiSelectField',
        'city' => 'SearchStringField',
        'comments' => 'SearchStringField',
        'contact' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'customer' => 'SearchMultiSelectField',
        'dateCreated' => 'SearchDateField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'email' => 'SearchStringField',
        'endDate' => 'SearchDateField',
        'entityId' => 'SearchStringField',
        'estCost' => 'SearchDoubleField',
        'estEndDate' => 'SearchDateField',
        'estimatedGrossProfit' => 'SearchDoubleField',
        'estimatedGrossProfitPercent' => 'SearchDoubleField',
        'estimatedLaborCost' => 'SearchDoubleField',
        'estimatedLaborCostBaseline' => 'SearchDoubleField',
        'estimatedLaborRevenue' => 'SearchDoubleField',
        'estimatedTime' => 'SearchDoubleField',
        'estimatedTimeOverride' => 'SearchDoubleField',
        'estimatedTimeOverrideBaseline' => 'SearchDoubleField',
        'estRevenue' => 'SearchDoubleField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'giveAccess' => 'SearchBooleanField',
        'globalSubscriptionStatus' => 'SearchEnumMultiSelectField',
        'image' => 'SearchStringField',
        'includeCrmTasksInTotals' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDefaultBilling' => 'SearchBooleanField',
        'isDefaultShipping' => 'SearchBooleanField',
        'isExemptTime' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isProductiveTime' => 'SearchBooleanField',
        'isUtilizedTime' => 'SearchBooleanField',
        'jobBillingType' => 'SearchEnumMultiSelectField',
        'jobItem' => 'SearchMultiSelectField',
        'jobPrice' => 'SearchDoubleField',
        'jobResource' => 'SearchMultiSelectField',
        'jobResourceRole' => 'SearchMultiSelectField',
        'language' => 'SearchEnumMultiSelectField',
        'lastBaselineDate' => 'SearchDateField',
        'lastModifiedDate' => 'SearchDateField',
        'level' => 'SearchEnumMultiSelectField',
        'limitTimeToAssignees' => 'SearchBooleanField',
        'materializeTime' => 'SearchBooleanField',
        'parent' => 'SearchMultiSelectField',
        'pctComplete' => 'SearchLongField',
        'percentTimeComplete' => 'SearchLongField',
        'permission' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'projectedEndDateBaseline' => 'SearchDateField',
        'projectExpenseType' => 'SearchMultiSelectField',
        'revRecForecastRule' => 'SearchMultiSelectField',
        'startDate' => 'SearchDateField',
        'startDateBaseline' => 'SearchDateField',
        'state' => 'SearchStringField',
        'status' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'timeRemaining' => 'SearchDoubleField',
        'type' => 'SearchMultiSelectField',
        'usePercentCompleteOverride' => 'SearchBooleanField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
