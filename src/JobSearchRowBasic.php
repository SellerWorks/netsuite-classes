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
 * JobSearchRowBasic.
 */
class JobSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accountNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $actualTime;
    /**
     * @var SearchColumnStringField[]
     */
    public $address;
    /**
     * @var SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressInternalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressLabel;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressPhone;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allocatePayrollExpenses;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allowAllResourcesForTasks;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allowExpenses;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allowTime;
    /**
     * @var SearchColumnStringField[]
     */
    public $altContact;
    /**
     * @var SearchColumnStringField[]
     */
    public $altEmail;
    /**
     * @var SearchColumnStringField[]
     */
    public $altName;
    /**
     * @var SearchColumnStringField[]
     */
    public $altPhone;
    /**
     * @var SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress1;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress2;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAttention;
    /**
     * @var SearchColumnStringField[]
     */
    public $billCity;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $billCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $billCountryCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingSchedule;
    /**
     * @var SearchColumnStringField[]
     */
    public $billPhone;
    /**
     * @var SearchColumnStringField[]
     */
    public $billState;
    /**
     * @var SearchColumnStringField[]
     */
    public $billZipCode;
    /**
     * @var SearchColumnDateField[]
     */
    public $calculatedEndDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $calculatedEndDateBaseline;
    /**
     * @var SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var SearchColumnStringField[]
     */
    public $city;
    /**
     * @var SearchColumnStringField[]
     */
    public $comments;
    /**
     * @var SearchColumnStringField[]
     */
    public $companyName;
    /**
     * @var SearchColumnStringField[]
     */
    public $contact;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $entityId;
    /**
     * @var SearchColumnLongField[]
     */
    public $entityNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedGrossProfit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedGrossProfitPercent;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedLaborCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedLaborCostBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedLaborRevenue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedRevenue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTimeOverride;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTimeOverrideBaseline;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $image;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $includeCrmTasksInTotals;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultBilling;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultShipping;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isExemptTime;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isProductiveTime;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isUtilizedTime;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $jobBillingType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $jobItem;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $jobPrice;
    /**
     * @var SearchColumnSelectField[]
     */
    public $jobResource;
    /**
     * @var SearchColumnSelectField[]
     */
    public $jobResourceRole;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastBaselineDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $limitTimeToAssignees;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $materializeTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $percentComplete;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $percentTimeComplete;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $permission;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnStringField[]
     */
    public $phoneticName;
    /**
     * @var SearchColumnDateField[]
     */
    public $projectedEndDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $projectedEndDateBaseline;
    /**
     * @var SearchColumnSelectField[]
     */
    public $projectExpenseType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revRecForecastRule;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress1;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress2;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAttention;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipCity;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCountry;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipCountryCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipPhone;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDateBaseline;
    /**
     * @var SearchColumnStringField[]
     */
    public $state;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var SearchColumnDateField[]
     */
    public $subscriptionDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $subscriptionStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $timeApproval;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $timeRemaining;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $usePercentCompleteOverride;
    /**
     * @var SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accountNumber' => 'SearchColumnStringField[]',
        'actualTime' => 'SearchColumnDoubleField[]',
        'address' => 'SearchColumnStringField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'addressee' => 'SearchColumnStringField[]',
        'addressInternalId' => 'SearchColumnStringField[]',
        'addressLabel' => 'SearchColumnStringField[]',
        'addressPhone' => 'SearchColumnStringField[]',
        'allocatePayrollExpenses' => 'SearchColumnBooleanField[]',
        'allowAllResourcesForTasks' => 'SearchColumnBooleanField[]',
        'allowExpenses' => 'SearchColumnBooleanField[]',
        'allowTime' => 'SearchColumnBooleanField[]',
        'altContact' => 'SearchColumnStringField[]',
        'altEmail' => 'SearchColumnStringField[]',
        'altName' => 'SearchColumnStringField[]',
        'altPhone' => 'SearchColumnStringField[]',
        'attention' => 'SearchColumnStringField[]',
        'billAddress1' => 'SearchColumnStringField[]',
        'billAddress2' => 'SearchColumnStringField[]',
        'billAddress3' => 'SearchColumnStringField[]',
        'billAddressee' => 'SearchColumnStringField[]',
        'billAttention' => 'SearchColumnStringField[]',
        'billCity' => 'SearchColumnStringField[]',
        'billCountry' => 'SearchColumnEnumSelectField[]',
        'billCountryCode' => 'SearchColumnStringField[]',
        'billingSchedule' => 'SearchColumnSelectField[]',
        'billPhone' => 'SearchColumnStringField[]',
        'billState' => 'SearchColumnStringField[]',
        'billZipCode' => 'SearchColumnStringField[]',
        'calculatedEndDate' => 'SearchColumnDateField[]',
        'calculatedEndDateBaseline' => 'SearchColumnDateField[]',
        'category' => 'SearchColumnSelectField[]',
        'city' => 'SearchColumnStringField[]',
        'comments' => 'SearchColumnStringField[]',
        'companyName' => 'SearchColumnStringField[]',
        'contact' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'customer' => 'SearchColumnSelectField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'defaultTaxReg' => 'SearchColumnStringField[]',
        'email' => 'SearchColumnStringField[]',
        'endDate' => 'SearchColumnDateField[]',
        'entityId' => 'SearchColumnStringField[]',
        'entityNumber' => 'SearchColumnLongField[]',
        'entityStatus' => 'SearchColumnSelectField[]',
        'estimatedCost' => 'SearchColumnDoubleField[]',
        'estimatedGrossProfit' => 'SearchColumnDoubleField[]',
        'estimatedGrossProfitPercent' => 'SearchColumnDoubleField[]',
        'estimatedLaborCost' => 'SearchColumnDoubleField[]',
        'estimatedLaborCostBaseline' => 'SearchColumnDoubleField[]',
        'estimatedLaborRevenue' => 'SearchColumnDoubleField[]',
        'estimatedRevenue' => 'SearchColumnDoubleField[]',
        'estimatedTime' => 'SearchColumnDoubleField[]',
        'estimatedTimeOverride' => 'SearchColumnDoubleField[]',
        'estimatedTimeOverrideBaseline' => 'SearchColumnDoubleField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'globalSubscriptionStatus' => 'SearchColumnEnumSelectField[]',
        'image' => 'SearchColumnSelectField[]',
        'includeCrmTasksInTotals' => 'SearchColumnBooleanField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDefaultBilling' => 'SearchColumnBooleanField[]',
        'isDefaultShipping' => 'SearchColumnBooleanField[]',
        'isExemptTime' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isProductiveTime' => 'SearchColumnBooleanField[]',
        'isUtilizedTime' => 'SearchColumnBooleanField[]',
        'jobBillingType' => 'SearchColumnEnumSelectField[]',
        'jobItem' => 'SearchColumnSelectField[]',
        'jobPrice' => 'SearchColumnDoubleField[]',
        'jobResource' => 'SearchColumnSelectField[]',
        'jobResourceRole' => 'SearchColumnSelectField[]',
        'language' => 'SearchColumnEnumSelectField[]',
        'lastBaselineDate' => 'SearchColumnDateField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'level' => 'SearchColumnEnumSelectField[]',
        'limitTimeToAssignees' => 'SearchColumnBooleanField[]',
        'materializeTime' => 'SearchColumnBooleanField[]',
        'percentComplete' => 'SearchColumnDoubleField[]',
        'percentTimeComplete' => 'SearchColumnDoubleField[]',
        'permission' => 'SearchColumnEnumSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'phoneticName' => 'SearchColumnStringField[]',
        'projectedEndDate' => 'SearchColumnDateField[]',
        'projectedEndDateBaseline' => 'SearchColumnDateField[]',
        'projectExpenseType' => 'SearchColumnSelectField[]',
        'revRecForecastRule' => 'SearchColumnSelectField[]',
        'shipAddress1' => 'SearchColumnStringField[]',
        'shipAddress2' => 'SearchColumnStringField[]',
        'shipAddress3' => 'SearchColumnStringField[]',
        'shipAddressee' => 'SearchColumnStringField[]',
        'shipAttention' => 'SearchColumnStringField[]',
        'shipCity' => 'SearchColumnStringField[]',
        'shipCountry' => 'SearchColumnEnumSelectField[]',
        'shipCountryCode' => 'SearchColumnStringField[]',
        'shipPhone' => 'SearchColumnStringField[]',
        'shipState' => 'SearchColumnStringField[]',
        'shipZip' => 'SearchColumnStringField[]',
        'startDate' => 'SearchColumnDateField[]',
        'startDateBaseline' => 'SearchColumnDateField[]',
        'state' => 'SearchColumnStringField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'subscriptionDate' => 'SearchColumnDateField[]',
        'subscriptionStatus' => 'SearchColumnBooleanField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'timeApproval' => 'SearchColumnSelectField[]',
        'timeRemaining' => 'SearchColumnDoubleField[]',
        'usePercentCompleteOverride' => 'SearchColumnBooleanField[]',
        'zipCode' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
