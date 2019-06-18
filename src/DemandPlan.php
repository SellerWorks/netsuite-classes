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
 * DemandPlan.
 */
class DemandPlan
{
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var float
     */
    public $calculatedQuantity;
    /**
     * @var PeriodDemandPlanList
     */
    public $periodDemandPlanList;

    public static $paramtypesmap = array(
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'calculatedQuantity' => 'float',
        'periodDemandPlanList' => 'PeriodDemandPlanList',
    );
}
