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
 * Partner.
 */
class Partner extends Record
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
     * @var string
     */
    public $partnerCode;
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
     * @var RecordRef
     */
    public $parent;
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
     * @var PartnerTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var string
     */
    public $referringUrl;
    /**
     * @var RecordRefList
     */
    public $roleList;
    /**
     * @var CategoryList
     */
    public $categoryList;
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
    public $taxIdNum;
    /**
     * @var string
     */
    public $vatRegNumber;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $bcn;
    /**
     * @var RecordRef
     */
    public $image;
    /**
     * @var TaxFractionUnit
     */
    public $taxFractionUnit;
    /**
     * @var EmailPreference
     */
    public $emailPreference;
    /**
     * @var RecordRef
     */
    public $defaultTaxReg;
    /**
     * @var TaxRounding
     */
    public $taxRounding;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $subsidiary;
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
     * @var bool
     */
    public $giveAccess;
    /**
     * @var RecordRef
     */
    public $accessRole;
    /**
     * @var bool
     */
    public $sendEmail;
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
    public $subPartnerLogin;
    /**
     * @var string
     */
    public $loginAs;
    /**
     * @var bool
     */
    public $eligibleForCommission;
    /**
     * @var ContactAccessRolesList
     */
    public $contactRolesList;
    /**
     * @var PartnerPromoCodeList
     */
    public $promoCodeList;
    /**
     * @var PartnerAddressbookList
     */
    public $addressbookList;
    /**
     * @var SubscriptionsList
     */
    public $subscriptionsList;
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
        'partnerCode' => 'string',
        'isPerson' => 'boolean',
        'phoneticName' => 'string',
        'salutation' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'companyName' => 'string',
        'parent' => 'RecordRef',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'url' => 'string',
        'defaultAddress' => 'string',
        'isInactive' => 'boolean',
        'lastModifiedDate' => 'dateTime',
        'dateCreated' => 'dateTime',
        'taxRegistrationList' => 'PartnerTaxRegistrationList',
        'globalSubscriptionStatus' => 'GlobalSubscriptionStatus',
        'referringUrl' => 'string',
        'roleList' => 'RecordRefList',
        'categoryList' => 'CategoryList',
        'title' => 'string',
        'printOnCheckAs' => 'string',
        'taxIdNum' => 'string',
        'vatRegNumber' => 'string',
        'comments' => 'string',
        'bcn' => 'string',
        'image' => 'RecordRef',
        'taxFractionUnit' => 'TaxFractionUnit',
        'emailPreference' => 'EmailPreference',
        'defaultTaxReg' => 'RecordRef',
        'taxRounding' => 'TaxRounding',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'class' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'homePhone' => 'string',
        'mobilePhone' => 'string',
        'altEmail' => 'string',
        'giveAccess' => 'boolean',
        'accessRole' => 'RecordRef',
        'sendEmail' => 'boolean',
        'password' => 'string',
        'password2' => 'string',
        'requirePwdChange' => 'boolean',
        'subPartnerLogin' => 'boolean',
        'loginAs' => 'string',
        'eligibleForCommission' => 'boolean',
        'contactRolesList' => 'ContactAccessRolesList',
        'promoCodeList' => 'PartnerPromoCodeList',
        'addressbookList' => 'PartnerAddressbookList',
        'subscriptionsList' => 'SubscriptionsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
