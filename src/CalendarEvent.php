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
 * CalendarEvent.
 */
class CalendarEvent extends Record
{
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
     * @var int
     */
    public $period;
    /**
     * @var RecurrenceFrequency
     */
    public $frequency;
    /**
     * @var RecurrenceDowMaskList
     */
    public $recurrenceDowMaskList;
    /**
     * @var RecurrenceDow
     */
    public $recurrenceDow;
    /**
     * @var RecurrenceDowim
     */
    public $recurrenceDowim;
    /**
     * @var dateTime
     */
    public $seriesStartDate;
    /**
     * @var dateTime
     */
    public $endByDate;
    /**
     * @var bool
     */
    public $noEndDate;
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $recurrence;
    /**
     * @var string
     */
    public $location;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var bool
     */
    public $allDayEvent;
    /**
     * @var bool
     */
    public $timedEvent;
    /**
     * @var CalendarEventReminderType
     */
    public $reminderType;
    /**
     * @var CalendarEventReminderMinutes
     */
    public $reminderMinutes;
    /**
     * @var CalendarEventStatus
     */
    public $status;
    /**
     * @var CalendarEventAccessLevel
     */
    public $accessLevel;
    /**
     * @var RecordRef
     */
    public $organizer;
    /**
     * @var string
     */
    public $message;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var ExclusionDateList
     */
    public $exclusionDateList;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var CalendarEventAttendeeList
     */
    public $attendeeList;
    /**
     * @var CalendarEventResourceList
     */
    public $resourceList;
    /**
     * @var CalendarEventTimeItemList
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

    public static $paramtypesmap = array(
        'company' => 'RecordRef',
        'contact' => 'RecordRef',
        'supportCase' => 'RecordRef',
        'transaction' => 'RecordRef',
        'period' => 'integer',
        'frequency' => 'RecurrenceFrequency',
        'recurrenceDowMaskList' => 'RecurrenceDowMaskList',
        'recurrenceDow' => 'RecurrenceDow',
        'recurrenceDowim' => 'RecurrenceDowim',
        'seriesStartDate' => 'dateTime',
        'endByDate' => 'dateTime',
        'noEndDate' => 'boolean',
        'sendEmail' => 'boolean',
        'customForm' => 'RecordRef',
        'title' => 'string',
        'recurrence' => 'string',
        'location' => 'string',
        'startDate' => 'dateTime',
        'allDayEvent' => 'boolean',
        'timedEvent' => 'boolean',
        'reminderType' => 'CalendarEventReminderType',
        'reminderMinutes' => 'CalendarEventReminderMinutes',
        'status' => 'CalendarEventStatus',
        'accessLevel' => 'CalendarEventAccessLevel',
        'organizer' => 'RecordRef',
        'message' => 'string',
        'createdDate' => 'dateTime',
        'endDate' => 'dateTime',
        'exclusionDateList' => 'ExclusionDateList',
        'lastModifiedDate' => 'dateTime',
        'owner' => 'RecordRef',
        'attendeeList' => 'CalendarEventAttendeeList',
        'resourceList' => 'CalendarEventResourceList',
        'timeItemList' => 'CalendarEventTimeItemList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
