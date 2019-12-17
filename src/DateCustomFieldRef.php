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
 * DateCustomFieldRef
 */
class DateCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "dateTime",
	);
}
