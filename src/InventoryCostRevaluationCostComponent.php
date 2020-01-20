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
 * InventoryCostRevaluationCostComponent
 */
class InventoryCostRevaluationCostComponent {
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $componentItem;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;

	static $paramtypesmap = array(
		"cost" => "float",
		"componentItem" => "RecordRef",
		"quantity" => "float",
		"units" => "RecordRef",
		"costCategory" => "RecordRef",
	);
}
