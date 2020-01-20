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
 * DemandPlan
 */
class DemandPlan {
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
	 * @var float
	 */
	public $calculatedQuantity;
	/**
	 * @access public
	 * @var PeriodDemandPlanList
	 */
	public $periodDemandPlanList;

	static $paramtypesmap = array(
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"calculatedQuantity" => "float",
		"periodDemandPlanList" => "PeriodDemandPlanList",
	);
}
