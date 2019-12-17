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
 * ManufacturingRoutingRoutingStep
 */
class ManufacturingRoutingRoutingStep {
	/**
	 * @access public
	 * @var integer
	 */
	public $operationSequence;
	/**
	 * @access public
	 * @var string
	 */
	public $operationName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var float
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var float
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var float
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $runRate;
	/**
	 * @access public
	 * @var ManufacturingLagType
	 */
	public $lagType;
	/**
	 * @access public
	 * @var integer
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $lagUnits;

	static $paramtypesmap = array(
		"operationSequence" => "integer",
		"operationName" => "string",
		"manufacturingWorkCenter" => "RecordRef",
		"machineResources" => "float",
		"laborResources" => "float",
		"manufacturingCostTemplate" => "RecordRef",
		"setupTime" => "float",
		"runRate" => "float",
		"lagType" => "ManufacturingLagType",
		"lagAmount" => "integer",
		"lagUnits" => "string",
	);
}
