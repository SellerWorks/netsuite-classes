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
 * VendorSearchBasic.
 */
class VendorSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $accountNumber;
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
    public $attention;
    /**
     * @var SearchDoubleField
     */
    public $balance;
    /**
     * @var SearchStringField
     */
    public $billAddress;
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
     * @var SearchDoubleField
     */
    public $creditLimit;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchDoubleField
     */
    public $currentExchangeRate;
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
     * @var SearchBooleanField
     */
    public $eligibleForCommission;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $emailPreference;
    /**
     * @var SearchBooleanField
     */
    public $emailTransactions;
    /**
     * @var SearchStringField
     */
    public $entityId;
    /**
     * @var SearchMultiSelectField
     */
    public $expenseAccount;
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
    public $faxTransactions;
    /**
     * @var SearchStringField
     */
    public $firstName;
    /**
     * @var SearchDoubleField
     */
    public $fxBalance;
    /**
     * @var SearchDoubleField
     */
    public $fxUnbilledOrders;
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
     * @var SearchBooleanField
     */
    public $hasDuplicates;
    /**
     * @var SearchStringField
     */
    public $image;
    /**
     * @var SearchMultiSelectField
     */
    public $incoterm;
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
    public $is1099Eligible;
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
    public $isJobResourceVend;
    /**
     * @var SearchBooleanField
     */
    public $isPerson;
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
     * @var SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var SearchStringField
     */
    public $middleName;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $otherRelationships;
    /**
     * @var SearchMultiSelectField
     */
    public $payablesAccount;
    /**
     * @var SearchStringField
     */
    public $pec;
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
     * @var SearchBooleanField
     */
    public $printTransactions;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderAmount;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderQuantity;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var SearchDoubleField
     */
    public $receiptAmount;
    /**
     * @var SearchDoubleField
     */
    public $receiptQuantity;
    /**
     * @var SearchDoubleField
     */
    public $receiptQuantityDiff;
    /**
     * @var SearchStringField
     */
    public $salutation;
    /**
     * @var SearchStringField
     */
    public $shipAddress;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchStringField
     */
    public $taxIdNum;
    /**
     * @var SearchMultiSelectField
     */
    public $timeApprover;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var SearchStringField
     */
    public $url;
    /**
     * @var SearchStringField
     */
    public $vatRegNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $workCalendar;
    /**
     * @var SearchStringField
     */
    public $zipCode;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accountNumber' => 'SearchStringField',
        'address' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'addressLabel' => 'SearchStringField',
        'addressPhone' => 'SearchStringField',
        'attention' => 'SearchStringField',
        'balance' => 'SearchDoubleField',
        'billAddress' => 'SearchStringField',
        'category' => 'SearchMultiSelectField',
        'city' => 'SearchStringField',
        'comments' => 'SearchStringField',
        'contact' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'creditLimit' => 'SearchDoubleField',
        'currency' => 'SearchMultiSelectField',
        'currentExchangeRate' => 'SearchDoubleField',
        'dateCreated' => 'SearchDateField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'eligibleForCommission' => 'SearchBooleanField',
        'email' => 'SearchStringField',
        'emailPreference' => 'SearchEnumMultiSelectField',
        'emailTransactions' => 'SearchBooleanField',
        'entityId' => 'SearchStringField',
        'expenseAccount' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'faxTransactions' => 'SearchBooleanField',
        'firstName' => 'SearchStringField',
        'fxBalance' => 'SearchDoubleField',
        'fxUnbilledOrders' => 'SearchDoubleField',
        'giveAccess' => 'SearchBooleanField',
        'globalSubscriptionStatus' => 'SearchEnumMultiSelectField',
        'group' => 'SearchMultiSelectField',
        'hasDuplicates' => 'SearchBooleanField',
        'image' => 'SearchStringField',
        'incoterm' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'is1099Eligible' => 'SearchBooleanField',
        'isDefaultBilling' => 'SearchBooleanField',
        'isDefaultShipping' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isJobResourceVend' => 'SearchBooleanField',
        'isPerson' => 'SearchBooleanField',
        'laborCost' => 'SearchDoubleField',
        'language' => 'SearchEnumMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'lastName' => 'SearchStringField',
        'level' => 'SearchEnumMultiSelectField',
        'middleName' => 'SearchStringField',
        'otherRelationships' => 'SearchEnumMultiSelectField',
        'payablesAccount' => 'SearchMultiSelectField',
        'pec' => 'SearchStringField',
        'permission' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'printTransactions' => 'SearchBooleanField',
        'purchaseOrderAmount' => 'SearchDoubleField',
        'purchaseOrderQuantity' => 'SearchDoubleField',
        'purchaseOrderQuantityDiff' => 'SearchDoubleField',
        'receiptAmount' => 'SearchDoubleField',
        'receiptQuantity' => 'SearchDoubleField',
        'receiptQuantityDiff' => 'SearchDoubleField',
        'salutation' => 'SearchStringField',
        'shipAddress' => 'SearchStringField',
        'state' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxIdNum' => 'SearchStringField',
        'timeApprover' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'unbilledOrders' => 'SearchDoubleField',
        'url' => 'SearchStringField',
        'vatRegNumber' => 'SearchStringField',
        'workCalendar' => 'SearchMultiSelectField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
