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
 * CalendarEventAttendee.
 */
class CalendarEventAttendee
{
    /**
     * @var bool
     */
    public $sendEmail;
    /**
     * @var RecordRef
     */
    public $attendee;
    /**
     * @var CalendarEventAttendeeResponse
     */
    public $response;
    /**
     * @var CalendarEventAttendeeAttendance
     */
    public $attendance;

    public static $paramtypesmap = [
        'sendEmail' => 'boolean',
        'attendee' => 'RecordRef',
        'response' => 'CalendarEventAttendeeResponse',
        'attendance' => 'CalendarEventAttendeeAttendance',
    ];
}
