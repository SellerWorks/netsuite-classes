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
 * PhoneCall.
 */
class PhoneCall extends Record
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var RecordRef
     */
    public $company;
    /**
     * @var RecordRef
     */
    public $contact;
    /**
     * @var RecordRef
     */
    public $supportCase;
    /**
     * @var RecordRef
     */
    public $transaction;
    /**
     * @var RecordRef
     */
    public $milestone;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var RecordRef
     */
    public $assigned;
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var bool
     */
    public $timedEvent;
    /**
     * @var dateTime
     */
    public $completedDate;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var PhoneCallStatus
     */
    public $status;
    /**
     * @var PhoneCallPriority
     */
    public $priority;
    /**
     * @var bool
     */
    public $accessLevel;
    /**
     * @var PhoneCallReminderType
     */
    public $reminderType;
    /**
     * @var PhoneCallReminderMinutes
     */
    public $reminderMinutes;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var PhoneCallContactList
     */
    public $contactList;
    /**
     * @var PhoneCallTimeItemList
     */
    public $timeItemList;
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
        'message' => 'string',
        'company' => 'RecordRef',
        'contact' => 'RecordRef',
        'supportCase' => 'RecordRef',
        'transaction' => 'RecordRef',
        'milestone' => 'RecordRef',
        'customForm' => 'RecordRef',
        'title' => 'string',
        'owner' => 'RecordRef',
        'assigned' => 'RecordRef',
        'sendEmail' => 'boolean',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'timedEvent' => 'boolean',
        'completedDate' => 'dateTime',
        'phone' => 'string',
        'status' => 'PhoneCallStatus',
        'priority' => 'PhoneCallPriority',
        'accessLevel' => 'boolean',
        'reminderType' => 'PhoneCallReminderType',
        'reminderMinutes' => 'PhoneCallReminderMinutes',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'contactList' => 'PhoneCallContactList',
        'timeItemList' => 'PhoneCallTimeItemList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
