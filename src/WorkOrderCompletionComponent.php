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
 * WorkOrderCompletionComponent.
 */
class WorkOrderCompletionComponent
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var int
     */
    public $operationSequenceNumber;
    /**
     * @var float
     */
    public $quantityPer;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var InventoryDetail
     */
    public $componentInventoryDetail;
    /**
     * @var int
     */
    public $lineNumber;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'operationSequenceNumber' => 'integer',
        'quantityPer' => 'float',
        'quantity' => 'float',
        'componentInventoryDetail' => 'InventoryDetail',
        'lineNumber' => 'integer',
    ];
}
