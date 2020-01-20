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
 * CustomerGroupPricing
 */
class CustomerGroupPricing {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $group;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $level;

	static $paramtypesmap = array(
		"group" => "RecordRef",
		"level" => "RecordRef",
	);
}
