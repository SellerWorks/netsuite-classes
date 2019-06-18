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
 * TransferOrderItem.
 */
class TransferOrderItem
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityFulfilled;
    /**
     * @var float
     */
    public $quantityPacked;
    /**
     * @var float
     */
    public $quantityPicked;
    /**
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $description;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var TransferOrderItemCommitInventory
     */
    public $commitInventory;
    /**
     * @var float
     */
    public $orderPriority;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var dateTime
     */
    public $expectedShipDate;
    /**
     * @var dateTime
     */
    public $expectedReceiptDate;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'line' => 'integer',
        'quantityAvailable' => 'float',
        'quantityOnHand' => 'float',
        'quantityBackOrdered' => 'float',
        'quantityCommitted' => 'float',
        'quantityFulfilled' => 'float',
        'quantityPacked' => 'float',
        'quantityPicked' => 'float',
        'quantityReceived' => 'float',
        'quantity' => 'float',
        'rate' => 'float',
        'units' => 'RecordRef',
        'amount' => 'float',
        'description' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'commitInventory' => 'TransferOrderItemCommitInventory',
        'orderPriority' => 'float',
        'options' => 'CustomFieldList',
        'isClosed' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'lastPurchasePrice' => 'float',
        'averageCost' => 'float',
        'expectedShipDate' => 'dateTime',
        'expectedReceiptDate' => 'dateTime',
        'customFieldList' => 'CustomFieldList',
    ];
}
