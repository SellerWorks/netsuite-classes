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
 * AssemblyItemBillOfMaterialsList
 */
class AssemblyItemBillOfMaterialsList {
	/**
	 * @access public
	 * @var AssemblyItemBillOfMaterials[]
	 */
	public $assemblyItemBillOfMaterials;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"assemblyItemBillOfMaterials" => "AssemblyItemBillOfMaterials[]",
		"replaceAll" => "boolean",
	);
}
