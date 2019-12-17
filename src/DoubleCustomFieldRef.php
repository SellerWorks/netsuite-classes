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
 * DoubleCustomFieldRef
 */
class DoubleCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var float
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "float",
	);
}
