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
 * Vendor.
 */
class Vendor extends Record
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
     * @var bool
     */
    public $isPerson;
    /**
     * @var string
     */
    public $phoneticName;
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
    public $companyName;
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
    public $url;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $dateCreated;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $printOnCheckAs;
    /**
     * @var string
     */
    public $altPhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var string
     */
    public $altEmail;
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
     * @var EmailPreference
     */
    public $emailPreference;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $representingSubsidiary;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var string
     */
    public $vatRegNumber;
    /**
     * @var RecordRef
     */
    public $expenseAccount;
    /**
     * @var RecordRef
     */
    public $payablesAccount;
    /**
     * @var RecordRef
     */
    public $terms;
    /**
     * @var RecordRef
     */
    public $incoterm;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var float
     */
    public $balancePrimary;
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
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $unbilledOrdersPrimary;
    /**
     * @var string
     */
    public $bcn;
    /**
     * @var float
     */
    public $unbilledOrders;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var bool
     */
    public $is1099Eligible;
    /**
     * @var bool
     */
    public $isJobResourceVend;
    /**
     * @var float
     */
    public $laborCost;
    /**
     * @var float
     */
    public $purchaseOrderQuantity;
    /**
     * @var float
     */
    public $purchaseOrderAmount;
    /**
     * @var float
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var float
     */
    public $receiptQuantity;
    /**
     * @var float
     */
    public $receiptAmount;
    /**
     * @var float
     */
    public $receiptQuantityDiff;
    /**
     * @var RecordRef
     */
    public $workCalendar;
    /**
     * @var string
     */
    public $taxIdNum;
    /**
     * @var RecordRef
     */
    public $taxItem;
    /**
     * @var bool
     */
    public $giveAccess;
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var bool
     */
    public $billPay;
    /**
     * @var bool
     */
    public $isAccountant;
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
    public $eligibleForCommission;
    /**
     * @var bool
     */
    public $emailTransactions;
    /**
     * @var bool
     */
    public $printTransactions;
    /**
     * @var bool
     */
    public $faxTransactions;
    /**
     * @var RecordRef
     */
    public $defaultTaxReg;
    /**
     * @var VendorPricingScheduleList
     */
    public $pricingScheduleList;
    /**
     * @var SubscriptionsList
     */
    public $subscriptionsList;
    /**
     * @var VendorAddressbookList
     */
    public $addressbookList;
    /**
     * @var VendorCurrencyList
     */
    public $currencyList;
    /**
     * @var VendorRolesList
     */
    public $rolesList;
    /**
     * @var VendorTaxRegistrationList
     */
    public $taxRegistrationList;
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
        'entityId' => 'string',
        'altName' => 'string',
        'isPerson' => 'boolean',
        'phoneticName' => 'string',
        'salutation' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'companyName' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'url' => 'string',
        'defaultAddress' => 'string',
        'isInactive' => 'boolean',
        'lastModifiedDate' => 'dateTime',
        'dateCreated' => 'dateTime',
        'category' => 'RecordRef',
        'title' => 'string',
        'printOnCheckAs' => 'string',
        'altPhone' => 'string',
        'homePhone' => 'string',
        'mobilePhone' => 'string',
        'altEmail' => 'string',
        'comments' => 'string',
        'globalSubscriptionStatus' => 'GlobalSubscriptionStatus',
        'image' => 'RecordRef',
        'emailPreference' => 'EmailPreference',
        'subsidiary' => 'RecordRef',
        'representingSubsidiary' => 'RecordRef',
        'accountNumber' => 'string',
        'legalName' => 'string',
        'vatRegNumber' => 'string',
        'expenseAccount' => 'RecordRef',
        'payablesAccount' => 'RecordRef',
        'terms' => 'RecordRef',
        'incoterm' => 'RecordRef',
        'creditLimit' => 'float',
        'balancePrimary' => 'float',
        'openingBalance' => 'float',
        'openingBalanceDate' => 'dateTime',
        'openingBalanceAccount' => 'RecordRef',
        'balance' => 'float',
        'unbilledOrdersPrimary' => 'float',
        'bcn' => 'string',
        'unbilledOrders' => 'float',
        'currency' => 'RecordRef',
        'is1099Eligible' => 'boolean',
        'isJobResourceVend' => 'boolean',
        'laborCost' => 'float',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'workCalendar' => 'RecordRef',
        'taxIdNum' => 'string',
        'taxItem' => 'RecordRef',
        'giveAccess' => 'boolean',
        'sendEmail' => 'boolean',
        'billPay' => 'boolean',
        'isAccountant' => 'boolean',
        'password' => 'string',
        'password2' => 'string',
        'requirePwdChange' => 'boolean',
        'eligibleForCommission' => 'boolean',
        'emailTransactions' => 'boolean',
        'printTransactions' => 'boolean',
        'faxTransactions' => 'boolean',
        'defaultTaxReg' => 'RecordRef',
        'pricingScheduleList' => 'VendorPricingScheduleList',
        'subscriptionsList' => 'SubscriptionsList',
        'addressbookList' => 'VendorAddressbookList',
        'currencyList' => 'VendorCurrencyList',
        'rolesList' => 'VendorRolesList',
        'taxRegistrationList' => 'VendorTaxRegistrationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
