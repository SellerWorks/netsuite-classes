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
 * LongCustomFieldRef
 */
class LongCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var integer
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "integer",
	);
}
