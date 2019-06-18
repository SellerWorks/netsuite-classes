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
 * Employee.
 */
class Employee extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $template;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $middleName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $dateCreated;
    /**
     * @var string
     */
    public $initials;
    /**
     * @var string
     */
    public $officePhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
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
    public $billingClass;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var EmployeeCompensationCurrency
     */
    public $compensationCurrency;
    /**
     * @var EmployeeBaseWageType
     */
    public $baseWageType;
    /**
     * @var float
     */
    public $baseWage;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var RecordRef
     */
    public $image;
    /**
     * @var EmployeePayFrequency
     */
    public $payFrequency;
    /**
     * @var dateTime
     */
    public $lastPaidDate;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var EmployeeUseTimeData
     */
    public $useTimeData;
    /**
     * @var bool
     */
    public $usePerquest;
    /**
     * @var RecordRef
     */
    public $workplace;
    /**
     * @var string
     */
    public $adpId;
    /**
     * @var bool
     */
    public $directDeposit;
    /**
     * @var float
     */
    public $expenseLimit;
    /**
     * @var float
     */
    public $purchaseOrderLimit;
    /**
     * @var float
     */
    public $purchaseOrderApprovalLimit;
    /**
     * @var string
     */
    public $socialSecurityNumber;
    /**
     * @var RecordRef
     */
    public $supervisor;
    /**
     * @var RecordRef
     */
    public $approver;
    /**
     * @var float
     */
    public $approvalLimit;
    /**
     * @var RecordRef
     */
    public $timeApprover;
    /**
     * @var RecordRef
     */
    public $employeeType;
    /**
     * @var bool
     */
    public $isSalesRep;
    /**
     * @var RecordRef
     */
    public $salesRole;
    /**
     * @var bool
     */
    public $isSupportRep;
    /**
     * @var bool
     */
    public $isJobResource;
    /**
     * @var float
     */
    public $laborCost;
    /**
     * @var dateTime
     */
    public $birthDate;
    /**
     * @var dateTime
     */
    public $hireDate;
    /**
     * @var dateTime
     */
    public $releaseDate;
    /**
     * @var string
     */
    public $terminationDetails;
    /**
     * @var RecordRef
     */
    public $terminationReason;
    /**
     * @var EmployeeTerminationRegretted
     */
    public $terminationRegretted;
    /**
     * @var EmployeeTerminationCategory
     */
    public $terminationCategory;
    /**
     * @var RecordRef
     */
    public $timeOffPlan;
    /**
     * @var dateTime
     */
    public $lastReviewDate;
    /**
     * @var dateTime
     */
    public $nextReviewDate;
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $employeeStatus;
    /**
     * @var string
     */
    public $jobDescription;
    /**
     * @var EmployeeWorkAssignment
     */
    public $workAssignment;
    /**
     * @var RecordRef
     */
    public $job;
    /**
     * @var RecordRef
     */
    public $maritalStatus;
    /**
     * @var RecordRef
     */
    public $ethnicity;
    /**
     * @var Gender
     */
    public $gender;
    /**
     * @var RecordRef
     */
    public $purchaseOrderApprover;
    /**
     * @var RecordRef
     */
    public $workCalendar;
    /**
     * @var bool
     */
    public $giveAccess;
    /**
     * @var RecordRef
     */
    public $defaultExpenseReportCurrency;
    /**
     * @var bool
     */
    public $concurrentWebServicesUser;
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var bool
     */
    public $hasOfflineAccess;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var bool
     */
    public $requirePwdChange;
    /**
     * @var bool
     */
    public $inheritIPRules;
    /**
     * @var string
     */
    public $IPAddressRule;
    /**
     * @var dateTime
     */
    public $startDateTimeOffCalc;
    /**
     * @var EmployeeCommissionPaymentPreference
     */
    public $commissionPaymentPreference;
    /**
     * @var bool
     */
    public $billPay;
    /**
     * @var RecordRef
     */
    public $defaultAcctCorpCardExp;
    /**
     * @var bool
     */
    public $eligibleForCommission;
    /**
     * @var EmployeeSubscriptionsList
     */
    public $subscriptionsList;
    /**
     * @var EmployeeRatesList
     */
    public $ratesList;
    /**
     * @var EmployeeAddressbookList
     */
    public $addressbookList;
    /**
     * @var EmployeeRolesList
     */
    public $rolesList;
    /**
     * @var EmployeeHrEducationList
     */
    public $hrEducationList;
    /**
     * @var EmployeeAccruedTimeList
     */
    public $accruedTimeList;
    /**
     * @var EmployeeDirectDepositList
     */
    public $directDepositList;
    /**
     * @var EmployeeCurrencyList
     */
    public $currencyList;
    /**
     * @var EmployeeCompanyContributionList
     */
    public $companyContributionList;
    /**
     * @var EmployeeEarningList
     */
    public $earningList;
    /**
     * @var EmployeeEmergencyContactList
     */
    public $emergencyContactList;
    /**
     * @var EmployeeHcmPositionList
     */
    public $hcmPositionList;
    /**
     * @var EmployeeDeductionList
     */
    public $deductionList;
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
        'template' => 'RecordRef',
        'entityId' => 'string',
        'salutation' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'altName' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'defaultAddress' => 'string',
        'isInactive' => 'boolean',
        'phoneticName' => 'string',
        'lastModifiedDate' => 'dateTime',
        'dateCreated' => 'dateTime',
        'initials' => 'string',
        'officePhone' => 'string',
        'homePhone' => 'string',
        'mobilePhone' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'billingClass' => 'RecordRef',
        'accountNumber' => 'string',
        'compensationCurrency' => 'EmployeeCompensationCurrency',
        'baseWageType' => 'EmployeeBaseWageType',
        'baseWage' => 'float',
        'comments' => 'string',
        'globalSubscriptionStatus' => 'GlobalSubscriptionStatus',
        'image' => 'RecordRef',
        'payFrequency' => 'EmployeePayFrequency',
        'lastPaidDate' => 'dateTime',
        'currency' => 'RecordRef',
        'useTimeData' => 'EmployeeUseTimeData',
        'usePerquest' => 'boolean',
        'workplace' => 'RecordRef',
        'adpId' => 'string',
        'directDeposit' => 'boolean',
        'expenseLimit' => 'float',
        'purchaseOrderLimit' => 'float',
        'purchaseOrderApprovalLimit' => 'float',
        'socialSecurityNumber' => 'string',
        'supervisor' => 'RecordRef',
        'approver' => 'RecordRef',
        'approvalLimit' => 'float',
        'timeApprover' => 'RecordRef',
        'employeeType' => 'RecordRef',
        'isSalesRep' => 'boolean',
        'salesRole' => 'RecordRef',
        'isSupportRep' => 'boolean',
        'isJobResource' => 'boolean',
        'laborCost' => 'float',
        'birthDate' => 'dateTime',
        'hireDate' => 'dateTime',
        'releaseDate' => 'dateTime',
        'terminationDetails' => 'string',
        'terminationReason' => 'RecordRef',
        'terminationRegretted' => 'EmployeeTerminationRegretted',
        'terminationCategory' => 'EmployeeTerminationCategory',
        'timeOffPlan' => 'RecordRef',
        'lastReviewDate' => 'dateTime',
        'nextReviewDate' => 'dateTime',
        'title' => 'string',
        'employeeStatus' => 'RecordRef',
        'jobDescription' => 'string',
        'workAssignment' => 'EmployeeWorkAssignment',
        'job' => 'RecordRef',
        'maritalStatus' => 'RecordRef',
        'ethnicity' => 'RecordRef',
        'gender' => 'Gender',
        'purchaseOrderApprover' => 'RecordRef',
        'workCalendar' => 'RecordRef',
        'giveAccess' => 'boolean',
        'defaultExpenseReportCurrency' => 'RecordRef',
        'concurrentWebServicesUser' => 'boolean',
        'sendEmail' => 'boolean',
        'hasOfflineAccess' => 'boolean',
        'password' => 'string',
        'password2' => 'string',
        'requirePwdChange' => 'boolean',
        'inheritIPRules' => 'boolean',
        'IPAddressRule' => 'string',
        'startDateTimeOffCalc' => 'dateTime',
        'commissionPaymentPreference' => 'EmployeeCommissionPaymentPreference',
        'billPay' => 'boolean',
        'defaultAcctCorpCardExp' => 'RecordRef',
        'eligibleForCommission' => 'boolean',
        'subscriptionsList' => 'EmployeeSubscriptionsList',
        'ratesList' => 'EmployeeRatesList',
        'addressbookList' => 'EmployeeAddressbookList',
        'rolesList' => 'EmployeeRolesList',
        'hrEducationList' => 'EmployeeHrEducationList',
        'accruedTimeList' => 'EmployeeAccruedTimeList',
        'directDepositList' => 'EmployeeDirectDepositList',
        'currencyList' => 'EmployeeCurrencyList',
        'companyContributionList' => 'EmployeeCompanyContributionList',
        'earningList' => 'EmployeeEarningList',
        'emergencyContactList' => 'EmployeeEmergencyContactList',
        'hcmPositionList' => 'EmployeeHcmPositionList',
        'deductionList' => 'EmployeeDeductionList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
