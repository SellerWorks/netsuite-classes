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
 * EmployeeSearchBasic.
 */
class EmployeeSearchBasic extends SearchRecordBasic
{
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
     * @var SearchStringField
     */
    public $alienNumber;
    /**
     * @var SearchDoubleField
     */
    public $allocation;
    /**
     * @var SearchDateField
     */
    public $anniversary;
    /**
     * @var SearchDoubleField
     */
    public $approvalLimit;
    /**
     * @var SearchMultiSelectField
     */
    public $approver;
    /**
     * @var SearchStringField
     */
    public $attention;
    /**
     * @var SearchDateField
     */
    public $authWorkDate;
    /**
     * @var SearchDoubleField
     */
    public $baseWage;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $baseWageType;
    /**
     * @var SearchStringField
     */
    public $billAddress;
    /**
     * @var SearchMultiSelectField
     */
    public $billingClass;
    /**
     * @var SearchDateField
     */
    public $birthDate;
    /**
     * @var SearchDateField
     */
    public $birthDay;
    /**
     * @var SearchMultiSelectField
     */
    public $cContribution;
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchStringField
     */
    public $comments;
    /**
     * @var SearchMultiSelectField
     */
    public $commissionPlan;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $compensationCurrency;
    /**
     * @var SearchBooleanField
     */
    public $concurrentWebServicesUser;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $county;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchMultiSelectField
     */
    public $deduction;
    /**
     * @var SearchMultiSelectField
     */
    public $defaultAcctCorpCardExp;
    /**
     * @var SearchMultiSelectField
     */
    public $defaultExpenseReportCurrency;
    /**
     * @var SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchMultiSelectField
     */
    public $earning;
    /**
     * @var SearchMultiSelectField
     */
    public $education;
    /**
     * @var SearchBooleanField
     */
    public $eligibleForCommission;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchMultiSelectField
     */
    public $employeeStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $employeeType;
    /**
     * @var SearchBooleanField
     */
    public $employeeTypeKpi;
    /**
     * @var SearchStringField
     */
    public $entityId;
    /**
     * @var SearchMultiSelectField
     */
    public $ethnicity;
    /**
     * @var SearchDoubleField
     */
    public $expenseLimit;
    /**
     * @var SearchMultiSelectField
     */
    public $expenseReportCurrency;
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
     * @var SearchStringField
     */
    public $firstName;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $gender;
    /**
     * @var SearchBooleanField
     */
    public $giveAccess;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $group;
    /**
     * @var SearchDateField
     */
    public $hireDate;
    /**
     * @var SearchBooleanField
     */
    public $I9Verified;
    /**
     * @var SearchStringField
     */
    public $image;
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
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isJobResource;
    /**
     * @var SearchBooleanField
     */
    public $isTemplate;
    /**
     * @var SearchMultiSelectField
     */
    public $job;
    /**
     * @var SearchStringField
     */
    public $jobDescription;
    /**
     * @var SearchDoubleField
     */
    public $laborCost;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchStringField
     */
    public $lastName;
    /**
     * @var SearchDateField
     */
    public $lastPaidDate;
    /**
     * @var SearchDateField
     */
    public $lastReviewDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchMultiSelectField
     */
    public $maritalStatus;
    /**
     * @var SearchStringField
     */
    public $middleName;
    /**
     * @var SearchDateField
     */
    public $nextReviewDate;
    /**
     * @var SearchBooleanField
     */
    public $offlineAccess;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $payFrequency;
    /**
     * @var SearchDateField
     */
    public $permChangeDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $permission;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $permissionChange;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchStringField
     */
    public $phoneticName;
    /**
     * @var SearchMultiSelectField
     */
    public $positionTitle;
    /**
     * @var SearchDoubleField
     */
    public $primaryEarningAmount;
    /**
     * @var SearchStringField
     */
    public $primaryEarningItem;
    /**
     * @var SearchStringField
     */
    public $primaryEarningType;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderApprovalLimit;
    /**
     * @var SearchMultiSelectField
     */
    public $purchaseOrderApprover;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderLimit;
    /**
     * @var SearchDateField
     */
    public $releaseDate;
    /**
     * @var SearchMultiSelectField
     */
    public $residentStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $role;
    /**
     * @var SearchMultiSelectField
     */
    public $roleChange;
    /**
     * @var SearchDateField
     */
    public $roleChangeDate;
    /**
     * @var SearchBooleanField
     */
    public $salesRep;
    /**
     * @var SearchMultiSelectField
     */
    public $salesRole;
    /**
     * @var SearchStringField
     */
    public $salutation;
    /**
     * @var SearchStringField
     */
    public $socialSecurityNumber;
    /**
     * @var SearchDateField
     */
    public $startDateTimeOffCalc;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $supervisor;
    /**
     * @var SearchBooleanField
     */
    public $supportRep;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $terminationCategory;
    /**
     * @var SearchStringField
     */
    public $terminationDetails;
    /**
     * @var SearchMultiSelectField
     */
    public $terminationReason;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $terminationRegretted;
    /**
     * @var SearchMultiSelectField
     */
    public $timeApprover;
    /**
     * @var SearchMultiSelectField
     */
    public $timeOffPlan;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchBooleanField
     */
    public $usePerquest;
    /**
     * @var SearchBooleanField
     */
    public $useTimeData;
    /**
     * @var SearchDateField
     */
    public $visaExpDate;
    /**
     * @var SearchMultiSelectField
     */
    public $visaType;
    /**
     * @var SearchMultiSelectField
     */
    public $withholding;
    /**
     * @var SearchMultiSelectField
     */
    public $workCalendar;
    /**
     * @var SearchMultiSelectField
     */
    public $workplace;
    /**
     * @var SearchStringField
     */
    public $zipCode;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'address' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'addressLabel' => 'SearchStringField',
        'addressPhone' => 'SearchStringField',
        'alienNumber' => 'SearchStringField',
        'allocation' => 'SearchDoubleField',
        'anniversary' => 'SearchDateField',
        'approvalLimit' => 'SearchDoubleField',
        'approver' => 'SearchMultiSelectField',
        'attention' => 'SearchStringField',
        'authWorkDate' => 'SearchDateField',
        'baseWage' => 'SearchDoubleField',
        'baseWageType' => 'SearchEnumMultiSelectField',
        'billAddress' => 'SearchStringField',
        'billingClass' => 'SearchMultiSelectField',
        'birthDate' => 'SearchDateField',
        'birthDay' => 'SearchDateField',
        'cContribution' => 'SearchMultiSelectField',
        'city' => 'SearchStringField',
        'class' => 'SearchMultiSelectField',
        'comments' => 'SearchStringField',
        'commissionPlan' => 'SearchMultiSelectField',
        'compensationCurrency' => 'SearchEnumMultiSelectField',
        'concurrentWebServicesUser' => 'SearchBooleanField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'dateCreated' => 'SearchDateField',
        'deduction' => 'SearchMultiSelectField',
        'defaultAcctCorpCardExp' => 'SearchMultiSelectField',
        'defaultExpenseReportCurrency' => 'SearchMultiSelectField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'department' => 'SearchMultiSelectField',
        'earning' => 'SearchMultiSelectField',
        'education' => 'SearchMultiSelectField',
        'eligibleForCommission' => 'SearchBooleanField',
        'email' => 'SearchStringField',
        'employeeStatus' => 'SearchMultiSelectField',
        'employeeType' => 'SearchMultiSelectField',
        'employeeTypeKpi' => 'SearchBooleanField',
        'entityId' => 'SearchStringField',
        'ethnicity' => 'SearchMultiSelectField',
        'expenseLimit' => 'SearchDoubleField',
        'expenseReportCurrency' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'firstName' => 'SearchStringField',
        'gender' => 'SearchEnumMultiSelectField',
        'giveAccess' => 'SearchBooleanField',
        'globalSubscriptionStatus' => 'SearchEnumMultiSelectField',
        'group' => 'SearchMultiSelectField',
        'hireDate' => 'SearchDateField',
        'I9Verified' => 'SearchBooleanField',
        'image' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDefaultBilling' => 'SearchBooleanField',
        'isDefaultShipping' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isJobResource' => 'SearchBooleanField',
        'isTemplate' => 'SearchBooleanField',
        'job' => 'SearchMultiSelectField',
        'jobDescription' => 'SearchStringField',
        'laborCost' => 'SearchDoubleField',
        'language' => 'SearchEnumMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'lastName' => 'SearchStringField',
        'lastPaidDate' => 'SearchDateField',
        'lastReviewDate' => 'SearchDateField',
        'level' => 'SearchEnumMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'maritalStatus' => 'SearchMultiSelectField',
        'middleName' => 'SearchStringField',
        'nextReviewDate' => 'SearchDateField',
        'offlineAccess' => 'SearchBooleanField',
        'payFrequency' => 'SearchEnumMultiSelectField',
        'permChangeDate' => 'SearchDateField',
        'permission' => 'SearchEnumMultiSelectField',
        'permissionChange' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'positionTitle' => 'SearchMultiSelectField',
        'primaryEarningAmount' => 'SearchDoubleField',
        'primaryEarningItem' => 'SearchStringField',
        'primaryEarningType' => 'SearchStringField',
        'purchaseOrderApprovalLimit' => 'SearchDoubleField',
        'purchaseOrderApprover' => 'SearchMultiSelectField',
        'purchaseOrderLimit' => 'SearchDoubleField',
        'releaseDate' => 'SearchDateField',
        'residentStatus' => 'SearchMultiSelectField',
        'role' => 'SearchMultiSelectField',
        'roleChange' => 'SearchMultiSelectField',
        'roleChangeDate' => 'SearchDateField',
        'salesRep' => 'SearchBooleanField',
        'salesRole' => 'SearchMultiSelectField',
        'salutation' => 'SearchStringField',
        'socialSecurityNumber' => 'SearchStringField',
        'startDateTimeOffCalc' => 'SearchDateField',
        'state' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'supervisor' => 'SearchMultiSelectField',
        'supportRep' => 'SearchBooleanField',
        'terminationCategory' => 'SearchEnumMultiSelectField',
        'terminationDetails' => 'SearchStringField',
        'terminationReason' => 'SearchMultiSelectField',
        'terminationRegretted' => 'SearchEnumMultiSelectField',
        'timeApprover' => 'SearchMultiSelectField',
        'timeOffPlan' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'usePerquest' => 'SearchBooleanField',
        'useTimeData' => 'SearchBooleanField',
        'visaExpDate' => 'SearchDateField',
        'visaType' => 'SearchMultiSelectField',
        'withholding' => 'SearchMultiSelectField',
        'workCalendar' => 'SearchMultiSelectField',
        'workplace' => 'SearchMultiSelectField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
