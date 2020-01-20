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
 * InboundShipmentLandedCost
 */
class InboundShipmentLandedCost {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $landedCostCostCategory;
	/**
	 * @access public
	 * @var float
	 */
	public $landedCostAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $landedCostCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $landedCostExchangeRate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $landedCostEffectiveDate;
	/**
	 * @access public
	 * @var InboundShipmentLandedCostAllocationMethod
	 */
	public $landedCostAllocationMethod;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $landedCostShipmentItemsList;

	static $paramtypesmap = array(
		"landedCostCostCategory" => "RecordRef",
		"landedCostAmount" => "float",
		"landedCostCurrency" => "RecordRef",
		"landedCostExchangeRate" => "float",
		"landedCostEffectiveDate" => "dateTime",
		"landedCostAllocationMethod" => "InboundShipmentLandedCostAllocationMethod",
		"landedCostShipmentItemsList" => "RecordRefList",
	);
}
