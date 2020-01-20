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
 * CustomFieldList
 */
class CustomFieldList {
	/**
	 * @access public
	 * @var CustomFieldRef[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "CustomFieldRef[]",
	);
}
