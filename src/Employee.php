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
 * Employee
 */
class Employee extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $template;
	/**
	 * @access public
	 * @var string
	 */
	public $entityId;
	/**
	 * @access public
	 * @var string
	 */
	public $salutation;
	/**
	 * @access public
	 * @var string
	 */
	public $firstName;
	/**
	 * @access public
	 * @var string
	 */
	public $middleName;
	/**
	 * @access public
	 * @var string
	 */
	public $lastName;
	/**
	 * @access public
	 * @var string
	 */
	public $altName;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;
	/**
	 * @access public
	 * @var string
	 */
	public $fax;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $defaultAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var string
	 */
	public $initials;
	/**
	 * @access public
	 * @var string
	 */
	public $officePhone;
	/**
	 * @access public
	 * @var string
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var string
	 */
	public $mobilePhone;
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
	public $billingClass;
	/**
	 * @access public
	 * @var string
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var EmployeeCompensationCurrency
	 */
	public $compensationCurrency;
	/**
	 * @access public
	 * @var EmployeeBaseWageType
	 */
	public $baseWageType;
	/**
	 * @access public
	 * @var float
	 */
	public $baseWage;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;
	/**
	 * @access public
	 * @var GlobalSubscriptionStatus
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $image;
	/**
	 * @access public
	 * @var EmployeePayFrequency
	 */
	public $payFrequency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastPaidDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var EmployeeUseTimeData
	 */
	public $useTimeData;
	/**
	 * @access public
	 * @var boolean
	 */
	public $usePerquest;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workplace;
	/**
	 * @access public
	 * @var string
	 */
	public $adpId;
	/**
	 * @access public
	 * @var boolean
	 */
	public $directDeposit;
	/**
	 * @access public
	 * @var float
	 */
	public $expenseLimit;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderLimit;
	/**
	 * @access public
	 * @var float
	 */
	public $purchaseOrderApprovalLimit;
	/**
	 * @access public
	 * @var string
	 */
	public $socialSecurityNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $supervisor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approver;
	/**
	 * @access public
	 * @var float
	 */
	public $approvalLimit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeApprover;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employeeType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSalesRep;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSupportRep;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isJobResource;
	/**
	 * @access public
	 * @var float
	 */
	public $laborCost;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $birthDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $hireDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $releaseDate;
	/**
	 * @access public
	 * @var string
	 */
	public $terminationDetails;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $terminationReason;
	/**
	 * @access public
	 * @var EmployeeTerminationRegretted
	 */
	public $terminationRegretted;
	/**
	 * @access public
	 * @var EmployeeTerminationCategory
	 */
	public $terminationCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeOffPlan;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastReviewDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextReviewDate;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employeeStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $jobDescription;
	/**
	 * @access public
	 * @var EmployeeWorkAssignment
	 */
	public $workAssignment;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $job;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $maritalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $ethnicity;
	/**
	 * @access public
	 * @var Gender
	 */
	public $gender;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $purchaseOrderApprover;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var boolean
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $defaultExpenseReportCurrency;
	/**
	 * @access public
	 * @var boolean
	 */
	public $concurrentWebServicesUser;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $hasOfflineAccess;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $password2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $requirePwdChange;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inheritIPRules;
	/**
	 * @access public
	 * @var string
	 */
	public $IPAddressRule;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDateTimeOffCalc;
	/**
	 * @access public
	 * @var EmployeeCommissionPaymentPreference
	 */
	public $commissionPaymentPreference;
	/**
	 * @access public
	 * @var boolean
	 */
	public $billPay;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $defaultAcctCorpCardExp;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var EmployeeSubscriptionsList
	 */
	public $subscriptionsList;
	/**
	 * @access public
	 * @var EmployeeRatesList
	 */
	public $ratesList;
	/**
	 * @access public
	 * @var EmployeeAddressbookList
	 */
	public $addressbookList;
	/**
	 * @access public
	 * @var EmployeeRolesList
	 */
	public $rolesList;
	/**
	 * @access public
	 * @var EmployeeHrEducationList
	 */
	public $hrEducationList;
	/**
	 * @access public
	 * @var EmployeeAccruedTimeList
	 */
	public $accruedTimeList;
	/**
	 * @access public
	 * @var EmployeeDirectDepositList
	 */
	public $directDepositList;
	/**
	 * @access public
	 * @var EmployeeCurrencyList
	 */
	public $currencyList;
	/**
	 * @access public
	 * @var EmployeeCompanyContributionList
	 */
	public $companyContributionList;
	/**
	 * @access public
	 * @var EmployeeEarningList
	 */
	public $earningList;
	/**
	 * @access public
	 * @var EmployeeEmergencyContactList
	 */
	public $emergencyContactList;
	/**
	 * @access public
	 * @var EmployeeHcmPositionList
	 */
	public $hcmPositionList;
	/**
	 * @access public
	 * @var EmployeeDeductionList
	 */
	public $deductionList;
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

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"template" => "RecordRef",
		"entityId" => "string",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"altName" => "string",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"defaultAddress" => "string",
		"isInactive" => "boolean",
		"phoneticName" => "string",
		"lastModifiedDate" => "dateTime",
		"dateCreated" => "dateTime",
		"initials" => "string",
		"officePhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"billingClass" => "RecordRef",
		"accountNumber" => "string",
		"compensationCurrency" => "EmployeeCompensationCurrency",
		"baseWageType" => "EmployeeBaseWageType",
		"baseWage" => "float",
		"comments" => "string",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"image" => "RecordRef",
		"payFrequency" => "EmployeePayFrequency",
		"lastPaidDate" => "dateTime",
		"currency" => "RecordRef",
		"useTimeData" => "EmployeeUseTimeData",
		"usePerquest" => "boolean",
		"workplace" => "RecordRef",
		"adpId" => "string",
		"directDeposit" => "boolean",
		"expenseLimit" => "float",
		"purchaseOrderLimit" => "float",
		"purchaseOrderApprovalLimit" => "float",
		"socialSecurityNumber" => "string",
		"supervisor" => "RecordRef",
		"approver" => "RecordRef",
		"approvalLimit" => "float",
		"timeApprover" => "RecordRef",
		"employeeType" => "RecordRef",
		"isSalesRep" => "boolean",
		"salesRole" => "RecordRef",
		"isSupportRep" => "boolean",
		"isJobResource" => "boolean",
		"laborCost" => "float",
		"birthDate" => "dateTime",
		"hireDate" => "dateTime",
		"releaseDate" => "dateTime",
		"terminationDetails" => "string",
		"terminationReason" => "RecordRef",
		"terminationRegretted" => "EmployeeTerminationRegretted",
		"terminationCategory" => "EmployeeTerminationCategory",
		"timeOffPlan" => "RecordRef",
		"lastReviewDate" => "dateTime",
		"nextReviewDate" => "dateTime",
		"title" => "string",
		"employeeStatus" => "RecordRef",
		"jobDescription" => "string",
		"workAssignment" => "EmployeeWorkAssignment",
		"job" => "RecordRef",
		"maritalStatus" => "RecordRef",
		"ethnicity" => "RecordRef",
		"gender" => "Gender",
		"purchaseOrderApprover" => "RecordRef",
		"workCalendar" => "RecordRef",
		"giveAccess" => "boolean",
		"defaultExpenseReportCurrency" => "RecordRef",
		"concurrentWebServicesUser" => "boolean",
		"sendEmail" => "boolean",
		"hasOfflineAccess" => "boolean",
		"password" => "string",
		"password2" => "string",
		"requirePwdChange" => "boolean",
		"inheritIPRules" => "boolean",
		"IPAddressRule" => "string",
		"startDateTimeOffCalc" => "dateTime",
		"commissionPaymentPreference" => "EmployeeCommissionPaymentPreference",
		"billPay" => "boolean",
		"defaultAcctCorpCardExp" => "RecordRef",
		"eligibleForCommission" => "boolean",
		"subscriptionsList" => "EmployeeSubscriptionsList",
		"ratesList" => "EmployeeRatesList",
		"addressbookList" => "EmployeeAddressbookList",
		"rolesList" => "EmployeeRolesList",
		"hrEducationList" => "EmployeeHrEducationList",
		"accruedTimeList" => "EmployeeAccruedTimeList",
		"directDepositList" => "EmployeeDirectDepositList",
		"currencyList" => "EmployeeCurrencyList",
		"companyContributionList" => "EmployeeCompanyContributionList",
		"earningList" => "EmployeeEarningList",
		"emergencyContactList" => "EmployeeEmergencyContactList",
		"hcmPositionList" => "EmployeeHcmPositionList",
		"deductionList" => "EmployeeDeductionList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
