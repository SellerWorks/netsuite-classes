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
 * Contact.
 */
class Contact extends Record
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
     * @var RecordRef
     */
    public $contactSource;
    /**
     * @var RecordRef
     */
    public $company;
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
    public $title;
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
    public $defaultAddress;
    /**
     * @var bool
     */
    public $isPrivate;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var CategoryList
     */
    public $categoryList;
    /**
     * @var string
     */
    public $altEmail;
    /**
     * @var string
     */
    public $officePhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var RecordRef
     */
    public $supervisor;
    /**
     * @var string
     */
    public $supervisorPhone;
    /**
     * @var RecordRef
     */
    public $assistant;
    /**
     * @var string
     */
    public $assistantPhone;
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
     * @var bool
     */
    public $billPay;
    /**
     * @var dateTime
     */
    public $dateCreated;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var ContactAddressbookList
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

    public static $paramtypesmap = array(
        'customForm' => 'RecordRef',
        'entityId' => 'string',
        'contactSource' => 'RecordRef',
        'company' => 'RecordRef',
        'salutation' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'title' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'defaultAddress' => 'string',
        'isPrivate' => 'boolean',
        'isInactive' => 'boolean',
        'subsidiary' => 'RecordRef',
        'phoneticName' => 'string',
        'categoryList' => 'CategoryList',
        'altEmail' => 'string',
        'officePhone' => 'string',
        'homePhone' => 'string',
        'mobilePhone' => 'string',
        'supervisor' => 'RecordRef',
        'supervisorPhone' => 'string',
        'assistant' => 'RecordRef',
        'assistantPhone' => 'string',
        'comments' => 'string',
        'globalSubscriptionStatus' => 'GlobalSubscriptionStatus',
        'image' => 'RecordRef',
        'billPay' => 'boolean',
        'dateCreated' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'addressbookList' => 'ContactAddressbookList',
        'subscriptionsList' => 'SubscriptionsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
