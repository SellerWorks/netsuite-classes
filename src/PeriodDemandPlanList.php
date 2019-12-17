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
 * PeriodDemandPlanList
 */
class PeriodDemandPlanList {
	/**
	 * @access public
	 * @var PeriodDemandPlan[]
	 */
	public $periodDemandPlan;

	static $paramtypesmap = array(
		"periodDemandPlan" => "PeriodDemandPlan[]",
	);
}
