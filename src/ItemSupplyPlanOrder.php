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
 * ItemSupplyPlanOrder.
 */
class ItemSupplyPlanOrder
{
    /**
     * @var int
     */
    public $orderLineId;
    /**
     * @var dateTime
     */
    public $orderDate;
    /**
     * @var dateTime
     */
    public $receiptDate;
    /**
     * @var RecordRef
     */
    public $sourceLocation;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var bool
     */
    public $orderCreated;
    /**
     * @var ItemSupplyPlanOrderType
     */
    public $orderType;

    public static $paramtypesmap = array(
        'orderLineId' => 'integer',
        'orderDate' => 'dateTime',
        'receiptDate' => 'dateTime',
        'sourceLocation' => 'RecordRef',
        'quantity' => 'float',
        'orderCreated' => 'boolean',
        'orderType' => 'ItemSupplyPlanOrderType',
    );
}
