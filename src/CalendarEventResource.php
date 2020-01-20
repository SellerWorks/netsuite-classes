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
 * CalendarEventResource
 */
class CalendarEventResource {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $resource;
	/**
	 * @access public
	 * @var string
	 */
	public $location;

	static $paramtypesmap = array(
		"resource" => "RecordRef",
		"location" => "string",
	);
}
