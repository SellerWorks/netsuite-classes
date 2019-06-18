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
 * LandedCostData.
 */
class LandedCostData
{
    /**
     * @var RecordRef
     */
    public $costCategory;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        'costCategory' => 'RecordRef',
        'amount' => 'float',
    );
}
