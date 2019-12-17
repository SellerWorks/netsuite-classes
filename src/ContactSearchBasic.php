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
 * ContactSearchBasic.
 */
class ContactSearchBasic extends SearchRecordBasic
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
     * @var SearchBooleanField
     */
    public $availableOffline;
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
     * @var SearchMultiSelectField
     */
    public $company;
    /**
     * @var SearchMultiSelectField
     */
    public $contactRole;
    /**
     * @var SearchMultiSelectField
     */
    public $contactSource;
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
    public $employer;
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
     * @var SearchStringField
     */
    public $firstName;
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
    public $isPrivate;
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
     * @var SearchMultiSelectField
     */
    public $owner;
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
    public $salutation;
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
    public $title;
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
        'availableOffline' => 'SearchBooleanField',
        'category' => 'SearchMultiSelectField',
        'city' => 'SearchStringField',
        'comments' => 'SearchStringField',
        'company' => 'SearchMultiSelectField',
        'contactRole' => 'SearchMultiSelectField',
        'contactSource' => 'SearchMultiSelectField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'dateCreated' => 'SearchDateField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'email' => 'SearchStringField',
        'employer' => 'SearchStringField',
        'entityId' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fax' => 'SearchStringField',
        'firstName' => 'SearchStringField',
        'giveAccess' => 'SearchBooleanField',
        'globalSubscriptionStatus' => 'SearchEnumMultiSelectField',
        'group' => 'SearchMultiSelectField',
        'hasDuplicates' => 'SearchBooleanField',
        'image' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDefaultBilling' => 'SearchBooleanField',
        'isDefaultShipping' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isPrivate' => 'SearchBooleanField',
        'language' => 'SearchEnumMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'lastName' => 'SearchStringField',
        'level' => 'SearchEnumMultiSelectField',
        'middleName' => 'SearchStringField',
        'owner' => 'SearchMultiSelectField',
        'permission' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'salutation' => 'SearchStringField',
        'state' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'type' => 'SearchEnumMultiSelectField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
