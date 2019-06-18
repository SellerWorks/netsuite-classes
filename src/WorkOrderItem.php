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
 * WorkOrderItem.
 */
class WorkOrderItem
{
    /**
     * @var int
     */
    public $line;
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
    public $componentYield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $orderPriority;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var ItemSource
     */
    public $itemSource;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $poVendor;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var float
     */
    public $contribution;
    /**
     * @var string
     */
    public $description;
    /**
     * @var WorkOrderItemItemCommitInventory
     */
    public $commitInventory;
    /**
     * @var dateTime
     */
    public $plannedIssueDate;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'line' => 'integer',
        'item' => 'RecordRef',
        'operationSequenceNumber' => 'integer',
        'componentYield' => 'float',
        'bomQuantity' => 'float',
        'quantityCommitted' => 'float',
        'quantityBackOrdered' => 'float',
        'quantityAvailable' => 'float',
        'averageCost' => 'float',
        'lastPurchasePrice' => 'float',
        'quantityOnHand' => 'float',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'orderPriority' => 'float',
        'options' => 'CustomFieldList',
        'itemSource' => 'ItemSource',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'poVendor' => 'RecordRef',
        'poRate' => 'float',
        'percentComplete' => 'float',
        'contribution' => 'float',
        'description' => 'string',
        'commitInventory' => 'WorkOrderItemItemCommitInventory',
        'plannedIssueDate' => 'dateTime',
        'customFieldList' => 'CustomFieldList',
    );
}
