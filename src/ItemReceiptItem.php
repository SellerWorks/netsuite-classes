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
 * ItemReceiptItem.
 */
class ItemReceiptItem
{
    /**
     * @var bool
     */
    public $itemReceive;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var int
     */
    public $orderLine;
    /**
     * @var int
     */
    public $line;
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var float
     */
    public $onHand;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $unitsDisplay;
    /**
     * @var float
     */
    public $unitCostOverride;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var bool
     */
    public $restock;
    /**
     * @var TransactionBillVarianceStatus
     */
    public $billVarianceStatus;
    /**
     * @var bool
     */
    public $isDropShipment;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var LandedCost
     */
    public $landedCost;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'itemReceive' => 'boolean',
        'jobName' => 'string',
        'item' => 'RecordRef',
        'orderLine' => 'integer',
        'line' => 'integer',
        'itemName' => 'string',
        'description' => 'string',
        'location' => 'RecordRef',
        'onHand' => 'float',
        'quantityRemaining' => 'float',
        'quantity' => 'float',
        'unitsDisplay' => 'string',
        'unitCostOverride' => 'float',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'binNumbers' => 'string',
        'expirationDate' => 'dateTime',
        'rate' => 'string',
        'currency' => 'string',
        'restock' => 'boolean',
        'billVarianceStatus' => 'TransactionBillVarianceStatus',
        'isDropShipment' => 'boolean',
        'options' => 'CustomFieldList',
        'landedCost' => 'LandedCost',
        'customFieldList' => 'CustomFieldList',
    ];
}
