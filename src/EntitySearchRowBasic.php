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
 * EntitySearchRowBasic.
 */
class EntitySearchRowBasic extends SearchRowBasic
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
    public $city;
    /**
     * @var SearchColumnStringField[]
     */
    public $comments;
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
     * @var SearchColumnStringField[]
     */
    public $email;
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
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
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
     * @var SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $level;
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
     * @var SearchColumnEnumSelectField[]
     */
    public $type;
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
        'attention' => 'SearchColumnStringField[]',
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
        'city' => 'SearchColumnStringField[]',
        'comments' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'defaultTaxReg' => 'SearchColumnStringField[]',
        'email' => 'SearchColumnStringField[]',
        'entityId' => 'SearchColumnStringField[]',
        'entityNumber' => 'SearchColumnLongField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fax' => 'SearchColumnStringField[]',
        'globalSubscriptionStatus' => 'SearchColumnEnumSelectField[]',
        'image' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDefaultBilling' => 'SearchColumnBooleanField[]',
        'isDefaultShipping' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'language' => 'SearchColumnEnumSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'level' => 'SearchColumnEnumSelectField[]',
        'permission' => 'SearchColumnEnumSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'phoneticName' => 'SearchColumnStringField[]',
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
        'type' => 'SearchColumnEnumSelectField[]',
        'zipCode' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
