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
 * ItemGroupHierarchyVersionsList
 */
class ItemGroupHierarchyVersionsList {
	/**
	 * @access public
	 * @var ItemGroupHierarchyVersions[]
	 */
	public $itemGroupHierarchyVersions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"itemGroupHierarchyVersions" => "ItemGroupHierarchyVersions[]",
		"replaceAll" => "boolean",
	);
}
