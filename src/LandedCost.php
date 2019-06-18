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
 * LandedCost.
 */
class LandedCost extends Record
{
    /**
     * @var LandedCostDataList
     */
    public $landedCostDataList;

    public static $paramtypesmap = array(
        'landedCostDataList' => 'LandedCostDataList',
    );
}
