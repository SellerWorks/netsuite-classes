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
 * EmployeeSearchRowBasic.
 */
class EmployeeSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accountNumber;
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
     * @var SearchColumnStringField[]
     */
    public $alienNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $allocation;
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
     * @var SearchColumnDoubleField[]
     */
    public $approvalLimit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $approver;
    /**
     * @var SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var SearchColumnDateField[]
     */
    public $authWorkDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $baseWage;
    /**
     * @var SearchEnumMultiSelectField[]
     */
    public $baseWageType;
    /**
     * @var SearchColumnStringField[]
     */
    public $billAddress;
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
    public $billingClass;
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
    public $birthDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $birthDay;
    /**
     * @var SearchColumnStringField[]
     */
    public $city;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnStringField[]
     */
    public $comments;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $compensationCurrency;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $concurrentWebServicesUser;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnSelectField[]
     */
    public $defaultAcctCorpCardExp;
    /**
     * @var SearchColumnSelectField[]
     */
    public $defaultExpenseReportCurrency;
    /**
     * @var SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $eligibleForCommission;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnSelectField[]
     */
    public $employeeStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $employeeType;
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
    public $ethnicity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $expenseLimit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $expenseReportCurrency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var SearchColumnStringField[]
     */
    public $firstName;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $gender;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $giveAccess;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchColumnDateField[]
     */
    public $hireDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $homePhone;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $i9Verified;
    /**
     * @var SearchColumnSelectField[]
     */
    public $image;
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
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isJobResource;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSalesRep;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSupportRep;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isTemplate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $job;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $laborCost;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $lastName;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastPaidDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastReviewDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnSelectField[]
     */
    public $maritalStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $middleName;
    /**
     * @var SearchColumnStringField[]
     */
    public $mobilePhone;
    /**
     * @var SearchColumnDateField[]
     */
    public $nextReviewDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $offlineAccess;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $payFrequency;
    /**
     * @var SearchColumnDateField[]
     */
    public $permChangeDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $permChangeLevel;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $permission;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $permissionChange;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnStringField[]
     */
    public $phoneticName;
    /**
     * @var SearchColumnStringField[]
     */
    public $positionTitle;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $primaryEarningAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $primaryEarningItem;
    /**
     * @var SearchColumnStringField[]
     */
    public $primaryEarningType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderApprovalLimit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $purchaseOrderApprover;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderLimit;
    /**
     * @var SearchColumnDateField[]
     */
    public $releaseDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $residentStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $role;
    /**
     * @var SearchColumnStringField[]
     */
    public $roleChange;
    /**
     * @var SearchColumnStringField[]
     */
    public $roleChangeAction;
    /**
     * @var SearchColumnDateField[]
     */
    public $roleChangeDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesRole;
    /**
     * @var SearchColumnStringField[]
     */
    public $salutation;
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
     * @var SearchColumnStringField[]
     */
    public $socialSecurityNumber;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDateTimeOffCalc;
    /**
     * @var SearchColumnEnumSelectField[]
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
    public $supervisor;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $terminationCategory;
    /**
     * @var SearchColumnStringField[]
     */
    public $terminationDetails;
    /**
     * @var SearchColumnSelectField[]
     */
    public $terminationReason;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $terminationRegretted;
    /**
     * @var SearchColumnSelectField[]
     */
    public $timeApprover;
    /**
     * @var SearchColumnStringField[]
     */
    public $timeOffPlan;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $usePerquest;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useTimeData;
    /**
     * @var SearchColumnDateField[]
     */
    public $visaExpDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $visaType;
    /**
     * @var SearchColumnStringField[]
     */
    public $workCalendar;
    /**
     * @var SearchColumnSelectField[]
     */
    public $workplace;
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
        'address' => 'SearchColumnStringField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'addressee' => 'SearchColumnStringField[]',
        'addressInternalId' => 'SearchColumnStringField[]',
        'addressLabel' => 'SearchColumnStringField[]',
        'addressPhone' => 'SearchColumnStringField[]',
        'alienNumber' => 'SearchColumnStringField[]',
        'allocation' => 'SearchColumnDoubleField[]',
        'altEmail' => 'SearchColumnStringField[]',
        'altName' => 'SearchColumnStringField[]',
        'altPhone' => 'SearchColumnStringField[]',
        'approvalLimit' => 'SearchColumnDoubleField[]',
        'approver' => 'SearchColumnSelectField[]',
        'attention' => 'SearchColumnStringField[]',
        'authWorkDate' => 'SearchColumnDateField[]',
        'baseWage' => 'SearchColumnDoubleField[]',
        'baseWageType' => 'SearchEnumMultiSelectField[]',
        'billAddress' => 'SearchColumnStringField[]',
        'billAddress1' => 'SearchColumnStringField[]',
        'billAddress2' => 'SearchColumnStringField[]',
        'billAddress3' => 'SearchColumnStringField[]',
        'billAddressee' => 'SearchColumnStringField[]',
        'billAttention' => 'SearchColumnStringField[]',
        'billCity' => 'SearchColumnStringField[]',
        'billCountry' => 'SearchColumnEnumSelectField[]',
        'billCountryCode' => 'SearchColumnStringField[]',
        'billingClass' => 'SearchColumnSelectField[]',
        'billPhone' => 'SearchColumnStringField[]',
        'billState' => 'SearchColumnStringField[]',
        'billZipCode' => 'SearchColumnStringField[]',
        'birthDate' => 'SearchColumnDateField[]',
        'birthDay' => 'SearchColumnDateField[]',
        'city' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnSelectField[]',
        'comments' => 'SearchColumnStringField[]',
        'compensationCurrency' => 'SearchColumnEnumSelectField[]',
        'concurrentWebServicesUser' => 'SearchColumnBooleanField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'defaultAcctCorpCardExp' => 'SearchColumnSelectField[]',
        'defaultExpenseReportCurrency' => 'SearchColumnSelectField[]',
        'defaultTaxReg' => 'SearchColumnStringField[]',
        'department' => 'SearchColumnSelectField[]',
        'eligibleForCommission' => 'SearchColumnBooleanField[]',
        'email' => 'SearchColumnStringField[]',
        'employeeStatus' => 'SearchColumnSelectField[]',
        'employeeType' => 'SearchColumnSelectField[]',
        'entityId' => 'SearchColumnStringField[]',
        'entityNumber' => 'SearchColumnLongField[]',
        'ethnicity' => 'SearchColumnSelectField[]',
        'expenseLimit' => 'SearchColumnDoubleField[]',
        'expenseReportCurrency' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'firstName' => 'SearchColumnStringField[]',
        'gender' => 'SearchColumnEnumSelectField[]',
        'giveAccess' => 'SearchColumnBooleanField[]',
        'globalSubscriptionStatus' => 'SearchColumnEnumSelectField[]',
        'hireDate' => 'SearchColumnDateField[]',
        'homePhone' => 'SearchColumnStringField[]',
        'i9Verified' => 'SearchColumnBooleanField[]',
        'image' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDefaultBilling' => 'SearchColumnBooleanField[]',
        'isDefaultShipping' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isJobResource' => 'SearchColumnBooleanField[]',
        'isSalesRep' => 'SearchColumnBooleanField[]',
        'isSupportRep' => 'SearchColumnBooleanField[]',
        'isTemplate' => 'SearchColumnBooleanField[]',
        'job' => 'SearchColumnSelectField[]',
        'laborCost' => 'SearchColumnDoubleField[]',
        'language' => 'SearchColumnEnumSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'lastName' => 'SearchColumnStringField[]',
        'lastPaidDate' => 'SearchColumnDateField[]',
        'lastReviewDate' => 'SearchColumnDateField[]',
        'level' => 'SearchColumnEnumSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'maritalStatus' => 'SearchColumnSelectField[]',
        'middleName' => 'SearchColumnStringField[]',
        'mobilePhone' => 'SearchColumnStringField[]',
        'nextReviewDate' => 'SearchColumnDateField[]',
        'offlineAccess' => 'SearchColumnBooleanField[]',
        'payFrequency' => 'SearchColumnEnumSelectField[]',
        'permChangeDate' => 'SearchColumnDateField[]',
        'permChangeLevel' => 'SearchColumnStringField[]',
        'permission' => 'SearchColumnEnumSelectField[]',
        'permissionChange' => 'SearchColumnEnumSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'phoneticName' => 'SearchColumnStringField[]',
        'positionTitle' => 'SearchColumnStringField[]',
        'primaryEarningAmount' => 'SearchColumnDoubleField[]',
        'primaryEarningItem' => 'SearchColumnStringField[]',
        'primaryEarningType' => 'SearchColumnStringField[]',
        'purchaseOrderApprovalLimit' => 'SearchColumnDoubleField[]',
        'purchaseOrderApprover' => 'SearchColumnSelectField[]',
        'purchaseOrderLimit' => 'SearchColumnDoubleField[]',
        'releaseDate' => 'SearchColumnDateField[]',
        'residentStatus' => 'SearchColumnSelectField[]',
        'role' => 'SearchColumnSelectField[]',
        'roleChange' => 'SearchColumnStringField[]',
        'roleChangeAction' => 'SearchColumnStringField[]',
        'roleChangeDate' => 'SearchColumnDateField[]',
        'salesRole' => 'SearchColumnSelectField[]',
        'salutation' => 'SearchColumnStringField[]',
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
        'socialSecurityNumber' => 'SearchColumnStringField[]',
        'startDateTimeOffCalc' => 'SearchColumnDateField[]',
        'state' => 'SearchColumnEnumSelectField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'subscriptionDate' => 'SearchColumnDateField[]',
        'subscriptionStatus' => 'SearchColumnBooleanField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'supervisor' => 'SearchColumnSelectField[]',
        'terminationCategory' => 'SearchColumnEnumSelectField[]',
        'terminationDetails' => 'SearchColumnStringField[]',
        'terminationReason' => 'SearchColumnSelectField[]',
        'terminationRegretted' => 'SearchColumnEnumSelectField[]',
        'timeApprover' => 'SearchColumnSelectField[]',
        'timeOffPlan' => 'SearchColumnStringField[]',
        'title' => 'SearchColumnStringField[]',
        'usePerquest' => 'SearchColumnBooleanField[]',
        'useTimeData' => 'SearchColumnBooleanField[]',
        'visaExpDate' => 'SearchColumnDateField[]',
        'visaType' => 'SearchColumnSelectField[]',
        'workCalendar' => 'SearchColumnStringField[]',
        'workplace' => 'SearchColumnSelectField[]',
        'zipCode' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
