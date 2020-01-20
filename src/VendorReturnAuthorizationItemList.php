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
 * VendorReturnAuthorizationItemList
 */
class VendorReturnAuthorizationItemList {
	/**
	 * @access public
	 * @var VendorReturnAuthorizationItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "VendorReturnAuthorizationItem[]",
		"replaceAll" => "boolean",
	);
}
