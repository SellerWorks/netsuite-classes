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
 * InventoryCostRevaluationCostComponentList
 */
class InventoryCostRevaluationCostComponentList {
	/**
	 * @access public
	 * @var InventoryCostRevaluationCostComponent[]
	 */
	public $costComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"costComponent" => "InventoryCostRevaluationCostComponent[]",
		"replaceAll" => "boolean",
	);
}
