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
 * ItemFulfillmentItem.
 */
class ItemFulfillmentItem
{
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var bool
     */
    public $itemReceive;
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
     * @var float
     */
    public $onHand;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $unitsDisplay;
    /**
     * @var string
     */
    public $createPo;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $poNum;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var int
     */
    public $orderLine;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var int
     */
    public $shipGroup;
    /**
     * @var bool
     */
    public $itemIsFulfilled;
    /**
     * @var RecordRef
     */
    public $shipAddress;
    /**
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'jobName' => 'string',
        'itemReceive' => 'boolean',
        'itemName' => 'string',
        'description' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'onHand' => 'float',
        'quantity' => 'float',
        'unitsDisplay' => 'string',
        'createPo' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'binNumbers' => 'string',
        'serialNumbers' => 'string',
        'poNum' => 'string',
        'item' => 'RecordRef',
        'orderLine' => 'integer',
        'quantityRemaining' => 'float',
        'options' => 'CustomFieldList',
        'shipGroup' => 'integer',
        'itemIsFulfilled' => 'boolean',
        'shipAddress' => 'RecordRef',
        'shipMethod' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    ];
}
