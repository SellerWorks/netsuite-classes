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
 * ManufacturingCostDetail.
 */
class ManufacturingCostDetail
{
    /**
     * @var RecordRef
     */
    public $costCategory;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $fixedRate;
    /**
     * @var float
     */
    public $runRate;

    public static $paramtypesmap = [
        'costCategory' => 'RecordRef',
        'item' => 'RecordRef',
        'fixedRate' => 'float',
        'runRate' => 'float',
    ];
}
