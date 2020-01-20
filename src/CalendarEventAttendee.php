<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * CalendarEventAttendee
 */
class CalendarEventAttendee {
	/**
	 * @access public
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $attendee;
	/**
	 * @access public
	 * @var CalendarEventAttendeeResponse
	 */
	public $response;
	/**
	 * @access public
	 * @var CalendarEventAttendeeAttendance
	 */
	public $attendance;

	static $paramtypesmap = array(
		"sendEmail" => "boolean",
		"attendee" => "RecordRef",
		"response" => "CalendarEventAttendeeResponse",
		"attendance" => "CalendarEventAttendeeAttendance",
	);
}
