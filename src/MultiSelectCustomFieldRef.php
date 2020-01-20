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
 * MultiSelectCustomFieldRef
 */
class MultiSelectCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var ListOrRecordRef[]
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "ListOrRecordRef[]",
	);
}
