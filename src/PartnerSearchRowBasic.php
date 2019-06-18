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
 * PartnerSearchRowBasic.
 */
class PartnerSearchRowBasic extends SearchRowBasic
{
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
     * @var SearchColumnBooleanField[]
     */
    public $assignTasks;
    /**
     * @var SearchColumnStringField[]
     */
    public $attention;
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
     * @var SearchColumnStringField[]
     */
    public $category;
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
     * @var SearchColumnStringField[]
     */
    public $companyName;
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
     * @var SearchColumnEnumSelectField[]
     */
    public $emailPreference;
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
    public $isPerson;
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
     * @var SearchColumnSelectField[]
     */
    public $location;
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
    public $parent;
    /**
     * @var SearchColumnStringField[]
     */
    public $partnerCode;
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
    public $promoCode;
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
    public $title;
    /**
     * @var SearchColumnStringField[]
     */
    public $url;
    /**
     * @var SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'address' => 'SearchColumnStringField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'addressee' => 'SearchColumnStringField[]',
        'addressInternalId' => 'SearchColumnStringField[]',
        'addressLabel' => 'SearchColumnStringField[]',
        'addressPhone' => 'SearchColumnStringField[]',
        'altEmail' => 'SearchColumnStringField[]',
        'altName' => 'SearchColumnStringField[]',
        'altPhone' => 'SearchColumnStringField[]',
        'assignTasks' => 'SearchColumnBooleanField[]',
        'attention' => 'SearchColumnStringField[]',
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
        'category' => 'SearchColumnStringField[]',
        'city' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnSelectField[]',
        'comments' => 'SearchColumnStringField[]',
        'companyName' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'defaultTaxReg' => 'SearchColumnStringField[]',
        'department' => 'SearchColumnSelectField[]',
        'eligibleForCommission' => 'SearchColumnBooleanField[]',
        'email' => 'SearchColumnStringField[]',
        'emailPreference' => 'SearchColumnEnumSelectField[]',
        'entityId' => 'SearchColumnStringField[]',
        'entityNumber' => 'SearchColumnLongField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'firstName' => 'SearchColumnStringField[]',
        'giveAccess' => 'SearchColumnBooleanField[]',
        'globalSubscriptionStatus' => 'SearchColumnEnumSelectField[]',
        'hasDuplicates' => 'SearchColumnBooleanField[]',
        'homePhone' => 'SearchColumnStringField[]',
        'image' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDefaultBilling' => 'SearchColumnBooleanField[]',
        'isDefaultShipping' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isPerson' => 'SearchColumnBooleanField[]',
        'language' => 'SearchColumnEnumSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'lastName' => 'SearchColumnStringField[]',
        'level' => 'SearchColumnEnumSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'middleName' => 'SearchColumnStringField[]',
        'mobilePhone' => 'SearchColumnStringField[]',
        'parent' => 'SearchColumnSelectField[]',
        'partnerCode' => 'SearchColumnStringField[]',
        'permission' => 'SearchColumnEnumSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'phoneticName' => 'SearchColumnStringField[]',
        'promoCode' => 'SearchColumnStringField[]',
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
        'title' => 'SearchColumnStringField[]',
        'url' => 'SearchColumnStringField[]',
        'zipCode' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
