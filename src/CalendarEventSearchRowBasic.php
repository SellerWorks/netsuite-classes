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
 * CalendarEventSearchRowBasic.
 */
class CalendarEventSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $accessLevel;
    /**
     * @var SearchColumnSelectField[]
     */
    public $attendee;
    /**
     * @var SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var SearchColumnDateField[]
     */
    public $completedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $endTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnDateField[]
     */
    public $instanceEnd;
    /**
     * @var SearchColumnDateField[]
     */
    public $instanceStart;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $markdone;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnSelectField[]
     */
    public $organizer;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnStringField[]
     */
    public $recurrence;
    /**
     * @var SearchColumnSelectField[]
     */
    public $resource;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $response;
    /**
     * @var SearchColumnStringField[]
     */
    public $startDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $startTime;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnSelectField[]
     */
    public $transaction;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accessLevel' => 'SearchColumnEnumSelectField[]',
        'attendee' => 'SearchColumnSelectField[]',
        'company' => 'SearchColumnSelectField[]',
        'completedDate' => 'SearchColumnDateField[]',
        'contact' => 'SearchColumnSelectField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'endTime' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'instanceEnd' => 'SearchColumnDateField[]',
        'instanceStart' => 'SearchColumnDateField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'location' => 'SearchColumnStringField[]',
        'markdone' => 'SearchColumnStringField[]',
        'message' => 'SearchColumnStringField[]',
        'organizer' => 'SearchColumnSelectField[]',
        'owner' => 'SearchColumnSelectField[]',
        'recurrence' => 'SearchColumnStringField[]',
        'resource' => 'SearchColumnSelectField[]',
        'response' => 'SearchColumnEnumSelectField[]',
        'startDate' => 'SearchColumnStringField[]',
        'startTime' => 'SearchColumnStringField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'transaction' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
