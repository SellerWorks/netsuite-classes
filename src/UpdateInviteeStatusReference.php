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
 * UpdateInviteeStatusReference
 */
class UpdateInviteeStatusReference {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $eventId;
	/**
	 * @access public
	 * @var CalendarEventAttendeeResponse
	 */
	public $responseCode;

	static $paramtypesmap = array(
		"eventId" => "RecordRef",
		"responseCode" => "CalendarEventAttendeeResponse",
	);
}
