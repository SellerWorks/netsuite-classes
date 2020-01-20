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
 * CustomFieldSubAccessList
 */
class CustomFieldSubAccessList {
	/**
	 * @access public
	 * @var CustomFieldSubAccess[]
	 */
	public $subAccess;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"subAccess" => "CustomFieldSubAccess[]",
		"replaceAll" => "boolean",
	);
}
