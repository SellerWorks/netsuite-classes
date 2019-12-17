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
 * CalendarEventSearchBasic.
 */
class CalendarEventSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchEnumMultiSelectField
     */
    public $accessLevel;
    /**
     * @var SearchMultiSelectField
     */
    public $attendee;
    /**
     * @var SearchMultiSelectField
     */
    public $calendar;
    /**
     * @var SearchDateField
     */
    public $completedDate;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchDateField
     */
    public $instanceStart;
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
    public $isUpcomingEvent;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchStringField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $message;
    /**
     * @var SearchMultiSelectField
     */
    public $organizer;
    /**
     * @var SearchMultiSelectField
     */
    public $owner;
    /**
     * @var SearchMultiSelectField
     */
    public $resource;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $response;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accessLevel' => 'SearchEnumMultiSelectField',
        'attendee' => 'SearchMultiSelectField',
        'calendar' => 'SearchMultiSelectField',
        'completedDate' => 'SearchDateField',
        'createdDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'instanceStart' => 'SearchDateField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isUpcomingEvent' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'location' => 'SearchStringField',
        'message' => 'SearchStringField',
        'organizer' => 'SearchMultiSelectField',
        'owner' => 'SearchMultiSelectField',
        'resource' => 'SearchMultiSelectField',
        'response' => 'SearchEnumMultiSelectField',
        'startDate' => 'SearchDateField',
        'status' => 'SearchEnumMultiSelectField',
        'title' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
