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
 * VendorSearchRowBasic.
 */
class VendorSearchRowBasic extends SearchRowBasic
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
     * @var SearchColumnDoubleField[]
     */
    public $balance;
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
     * @var SearchColumnDoubleField[]
     */
    public $creditLimit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $currentExchangeRate;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $eligibleForCommission;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $emailPreference;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $emailTransactions;
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
    public $expenseAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $faxTransactions;
    /**
     * @var SearchColumnStringField[]
     */
    public $firstName;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxBalance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxUnbilledOrders;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $giveAccess;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $hasDuplicates;
    /**
     * @var SearchColumnStringField[]
     */
    public $homePhone;
    /**
     * @var SearchColumnSelectField[]
     */
    public $image;
    /**
     * @var SearchColumnSelectField[]
     */
    public $incoterm;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $is1099Eligible;
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
    public $isJobResourceVend;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isPerson;
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
     * @var SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var SearchColumnStringField[]
     */
    public $middleName;
    /**
     * @var SearchColumnStringField[]
     */
    public $mobilePhone;
    /**
     * @var SearchColumnSelectField[]
     */
    public $payablesAccount;
    /**
     * @var SearchColumnStringField[]
     */
    public $pec;
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
     * @var SearchColumnStringField[]
     */
    public $printOnCheckAs;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $printTransactions;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;
    /**
     * @var SearchColumnStringField[]
     */
    public $salutation;
    /**
     * @var SearchColumnStringField[]
     */
    public $shipAddress;
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
     * @var SearchColumnStringField[]
     */
    public $taxIdNum;
    /**
     * @var SearchColumnSelectField[]
     */
    public $terms;
    /**
     * @var SearchColumnSelectField[]
     */
    public $timeApprover;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unbilledOrders;
    /**
     * @var SearchColumnStringField[]
     */
    public $url;
    /**
     * @var SearchColumnStringField[]
     */
    public $vatRegNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $workCalendar;
    /**
     * @var SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountNumber' => 'SearchColumnStringField[]',
        'address' => 'SearchColumnStringField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'addressee' => 'SearchColumnStringField[]',
        'addressInternalId' => 'SearchColumnStringField[]',
        'addressLabel' => 'SearchColumnStringField[]',
        'addressPhone' => 'SearchColumnStringField[]',
        'altContact' => 'SearchColumnStringField[]',
        'altEmail' => 'SearchColumnStringField[]',
        'altName' => 'SearchColumnStringField[]',
        'altPhone' => 'SearchColumnStringField[]',
        'attention' => 'SearchColumnStringField[]',
        'balance' => 'SearchColumnDoubleField[]',
        'billAddress' => 'SearchColumnStringField[]',
        'billAddress1' => 'SearchColumnStringField[]',
        'billAddress2' => 'SearchColumnStringField[]',
        'billAddress3' => 'SearchColumnStringField[]',
        'billAddressee' => 'SearchColumnStringField[]',
        'billAttention' => 'SearchColumnStringField[]',
        'billCity' => 'SearchColumnStringField[]',
        'billCountry' => 'SearchColumnEnumSelectField[]',
        'billCountryCode' => 'SearchColumnStringField[]',
        'billPhone' => 'SearchColumnStringField[]',
        'billState' => 'SearchColumnStringField[]',
        'billZipCode' => 'SearchColumnStringField[]',
        'category' => 'SearchColumnSelectField[]',
        'city' => 'SearchColumnStringField[]',
        'comments' => 'SearchColumnStringField[]',
        'companyName' => 'SearchColumnStringField[]',
        'contact' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'creditLimit' => 'SearchColumnDoubleField[]',
        'currency' => 'SearchColumnSelectField[]',
        'currentExchangeRate' => 'SearchColumnDoubleField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'defaultTaxReg' => 'SearchColumnStringField[]',
        'eligibleForCommission' => 'SearchColumnBooleanField[]',
        'email' => 'SearchColumnStringField[]',
        'emailPreference' => 'SearchColumnEnumSelectField[]',
        'emailTransactions' => 'SearchColumnBooleanField[]',
        'entityId' => 'SearchColumnStringField[]',
        'entityNumber' => 'SearchColumnLongField[]',
        'expenseAccount' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'faxTransactions' => 'SearchColumnBooleanField[]',
        'firstName' => 'SearchColumnStringField[]',
        'fxBalance' => 'SearchColumnDoubleField[]',
        'fxUnbilledOrders' => 'SearchColumnDoubleField[]',
        'giveAccess' => 'SearchColumnBooleanField[]',
        'globalSubscriptionStatus' => 'SearchColumnEnumSelectField[]',
        'hasDuplicates' => 'SearchColumnBooleanField[]',
        'homePhone' => 'SearchColumnStringField[]',
        'image' => 'SearchColumnSelectField[]',
        'incoterm' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'is1099Eligible' => 'SearchColumnBooleanField[]',
        'isDefaultBilling' => 'SearchColumnBooleanField[]',
        'isDefaultShipping' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isJobResourceVend' => 'SearchColumnBooleanField[]',
        'isPerson' => 'SearchColumnBooleanField[]',
        'laborCost' => 'SearchColumnDoubleField[]',
        'language' => 'SearchColumnEnumSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'lastName' => 'SearchColumnStringField[]',
        'level' => 'SearchColumnEnumSelectField[]',
        'middleName' => 'SearchColumnStringField[]',
        'mobilePhone' => 'SearchColumnStringField[]',
        'payablesAccount' => 'SearchColumnSelectField[]',
        'pec' => 'SearchColumnStringField[]',
        'permission' => 'SearchColumnEnumSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'phoneticName' => 'SearchColumnStringField[]',
        'printOnCheckAs' => 'SearchColumnStringField[]',
        'printTransactions' => 'SearchColumnBooleanField[]',
        'purchaseOrderAmount' => 'SearchColumnDoubleField[]',
        'purchaseOrderQuantity' => 'SearchColumnDoubleField[]',
        'purchaseOrderQuantityDiff' => 'SearchColumnDoubleField[]',
        'receiptAmount' => 'SearchColumnDoubleField[]',
        'receiptQuantity' => 'SearchColumnDoubleField[]',
        'receiptQuantityDiff' => 'SearchColumnDoubleField[]',
        'salutation' => 'SearchColumnStringField[]',
        'shipAddress' => 'SearchColumnStringField[]',
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
        'state' => 'SearchColumnStringField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'subscriptionDate' => 'SearchColumnDateField[]',
        'subscriptionStatus' => 'SearchColumnBooleanField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'taxIdNum' => 'SearchColumnStringField[]',
        'terms' => 'SearchColumnSelectField[]',
        'timeApprover' => 'SearchColumnSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'unbilledOrders' => 'SearchColumnDoubleField[]',
        'url' => 'SearchColumnStringField[]',
        'vatRegNumber' => 'SearchColumnStringField[]',
        'workCalendar' => 'SearchColumnSelectField[]',
        'zipCode' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
