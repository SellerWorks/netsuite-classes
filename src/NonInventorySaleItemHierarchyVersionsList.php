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
 * NonInventorySaleItemHierarchyVersionsList
 */
class NonInventorySaleItemHierarchyVersionsList {
	/**
	 * @access public
	 * @var NonInventorySaleItemHierarchyVersions[]
	 */
	public $nonInventorySaleItemHierarchyVersions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"nonInventorySaleItemHierarchyVersions" => "NonInventorySaleItemHierarchyVersions[]",
		"replaceAll" => "boolean",
	);
}
