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
 * UpdateInviteeStatusReference.
 */
class UpdateInviteeStatusReference
{
    /**
     * @var RecordRef
     */
    public $eventId;
    /**
     * @var CalendarEventAttendeeResponse
     */
    public $responseCode;

    public static $paramtypesmap = array(
        'eventId' => 'RecordRef',
        'responseCode' => 'CalendarEventAttendeeResponse',
    );
}
