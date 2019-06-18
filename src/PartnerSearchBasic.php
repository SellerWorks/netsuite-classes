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
 * PartnerSearchBasic.
 */
class PartnerSearchBasic extends SearchRecordBasic
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
     * @var SearchBooleanField
     */
    public $assignTasks;
    /**
     * @var SearchStringField
     */
    public $attention;
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
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchStringField
     */
    public $comments;
    /**
     * @var SearchMultiSelectField
     */
    public $commissionPlan;
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
     * @var SearchMultiSelectField
     */
    public $department;
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
    public $isPerson;
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
     * @var SearchMultiSelectField
     */
    public $location;
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
    public $parent;
    /**
     * @var SearchStringField
     */
    public $partnerCode;
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
     * @var SearchMultiSelectField
     */
    public $promoCode;
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
    public $title;
    /**
     * @var SearchStringField
     */
    public $URL;
    /**
     * @var SearchStringField
     */
    public $zipCode;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'address' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'addressLabel' => 'SearchStringField',
        'addressPhone' => 'SearchStringField',
        'assignTasks' => 'SearchBooleanField',
        'attention' => 'SearchStringField',
        'billAddress' => 'SearchStringField',
        'category' => 'SearchMultiSelectField',
        'city' => 'SearchStringField',
        'class' => 'SearchMultiSelectField',
        'comments' => 'SearchStringField',
        'commissionPlan' => 'SearchMultiSelectField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'dateCreated' => 'SearchDateField',
        'defaultTaxReg' => 'SearchMultiSelectField',
        'defaultTaxRegText' => 'SearchStringField',
        'department' => 'SearchMultiSelectField',
        'eligibleForCommission' => 'SearchBooleanField',
        'email' => 'SearchStringField',
        'emailPreference' => 'SearchEnumMultiSelectField',
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
        'isPerson' => 'SearchBooleanField',
        'language' => 'SearchEnumMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'lastName' => 'SearchStringField',
        'level' => 'SearchEnumMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'middleName' => 'SearchStringField',
        'otherRelationships' => 'SearchEnumMultiSelectField',
        'parent' => 'SearchMultiSelectField',
        'partnerCode' => 'SearchStringField',
        'permission' => 'SearchEnumMultiSelectField',
        'phone' => 'SearchStringField',
        'phoneticName' => 'SearchStringField',
        'promoCode' => 'SearchMultiSelectField',
        'salutation' => 'SearchStringField',
        'shipAddress' => 'SearchStringField',
        'state' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'URL' => 'SearchStringField',
        'zipCode' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
