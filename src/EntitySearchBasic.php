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
 * EntitySearchBasic.
 */
class EntitySearchBasic extends SearchRecordBasic
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
    public $attention;
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchStringField
     */
    public $comments;
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
    public $defaultTaxReg;
    /**
     * @var SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchStringField
     */
    public $entityId;
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
    public $giveAccess;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
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
     * @var SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $level;
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
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchStringField
     */
    public $zipCode;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'address' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'addressLabel' => 'SearchStringField',
        'addressPhone' => 'SearchStringField',
        'attention' => 'SearchStringField',
        'city' => 'SearchStringField',
        'comments' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'dateCreated' => 'SearchDateField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'email' => 'SearchStringField',
        'entityId' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'giveAccess' => 'SearchBooleanField',
        'globalSubscriptionStatus' => 'SearchEnumMultiSelectField',
        'image' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDefaultBilling' => 'SearchBooleanField',
        'isDefaultShipping' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'language' => 'SearchEnumMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'level' => 'SearchEnumMultiSelectField',
        'permission' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'state' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'type' => 'SearchEnumMultiSelectField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
