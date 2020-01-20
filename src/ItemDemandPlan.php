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
 * ItemDemandPlan
 */
class ItemDemandPlan extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var integer
	 */
	public $year;
	/**
	 * @access public
	 * @var DemandPlanMonth
	 */
	public $month;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var DemandPlanCalendarType
	 */
	public $demandPlanCalendarType;
	/**
	 * @access public
	 * @var DemandPlanMatrix
	 */
	public $demandPlanMatrix;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"subsidiary" => "RecordRef",
		"location" => "RecordRef",
		"item" => "RecordRef",
		"units" => "RecordRef",
		"memo" => "string",
		"year" => "integer",
		"month" => "DemandPlanMonth",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"demandPlanCalendarType" => "DemandPlanCalendarType",
		"demandPlanMatrix" => "DemandPlanMatrix",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
