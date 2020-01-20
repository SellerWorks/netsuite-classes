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
 * WorkOrderCompletionOperation
 */
class WorkOrderCompletionOperation {
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
	 * @var string
	 */
	public $workCenter;
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
	 * @var float
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityRemaining;
	/**
	 * @access public
	 * @var float
	 */
	public $predecessorCompletedQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $recordSetup;
	/**
	 * @access public
	 * @var float
	 */
	public $machineSetupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $laborSetupTime;
	/**
	 * @access public
	 * @var float
	 */
	public $machineRunTime;
	/**
	 * @access public
	 * @var float
	 */
	public $laborRunTime;

	static $paramtypesmap = array(
		"operationSequence" => "integer",
		"operationName" => "string",
		"workCenter" => "string",
		"machineResources" => "float",
		"laborResources" => "float",
		"inputQuantity" => "float",
		"quantityRemaining" => "float",
		"predecessorCompletedQuantity" => "float",
		"completedQuantity" => "float",
		"recordSetup" => "boolean",
		"machineSetupTime" => "float",
		"laborSetupTime" => "float",
		"machineRunTime" => "float",
		"laborRunTime" => "float",
	);
}
