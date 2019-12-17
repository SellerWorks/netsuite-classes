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
 * ManufacturingOperationTaskSearchRowBasic
 */
class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualRunTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualSetupTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $order;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $predecessorType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $remainingQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $runTime;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $workOrder;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualRunTime" => "SearchColumnDoubleField[]",
		"actualSetupTime" => "SearchColumnDoubleField[]",
		"completedQuantity" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"inputQuantity" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"laborResources" => "SearchColumnDoubleField[]",
		"lagAmount" => "SearchColumnDoubleField[]",
		"lagType" => "SearchColumnEnumSelectField[]",
		"lagUnits" => "SearchColumnStringField[]",
		"machineResources" => "SearchColumnDoubleField[]",
		"manufacturingCostTemplate" => "SearchColumnSelectField[]",
		"manufacturingWorkCenter" => "SearchColumnSelectField[]",
		"message" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"order" => "SearchColumnDoubleField[]",
		"predecessor" => "SearchColumnSelectField[]",
		"predecessorType" => "SearchColumnStringField[]",
		"remainingQuantity" => "SearchColumnDoubleField[]",
		"runRate" => "SearchColumnDoubleField[]",
		"runTime" => "SearchColumnDoubleField[]",
		"sequence" => "SearchColumnLongField[]",
		"setupTime" => "SearchColumnDoubleField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnSelectField[]",
		"workOrder" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
