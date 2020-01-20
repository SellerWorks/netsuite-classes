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
 * LotNumberedAssemblyItemHierarchyVersionsList
 */
class LotNumberedAssemblyItemHierarchyVersionsList {
	/**
	 * @access public
	 * @var LotNumberedAssemblyItemHierarchyVersions[]
	 */
	public $lotNumberedAssemblyItemHierarchyVersions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"lotNumberedAssemblyItemHierarchyVersions" => "LotNumberedAssemblyItemHierarchyVersions[]",
		"replaceAll" => "boolean",
	);
}
