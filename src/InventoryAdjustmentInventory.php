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
 * InventoryAdjustmentInventory.
 */
class InventoryAdjustmentInventory
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
     * @var InventoryDetail
     */
    public $inventoryDetail;
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
     * @var RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $currentValue;
    /**
     * @var float
     */
    public $adjustQtyBy;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $newQuantity;
    /**
     * @var float
     */
    public $unitCost;
    /**
     * @var float
     */
    public $foreignCurrencyUnitCost;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var float
     */
    public $exchangeRate;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'line' => 'integer',
        'inventoryDetail' => 'InventoryDetail',
        'description' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'units' => 'RecordRef',
        'quantityOnHand' => 'float',
        'currentValue' => 'float',
        'adjustQtyBy' => 'float',
        'binNumbers' => 'string',
        'serialNumbers' => 'string',
        'newQuantity' => 'float',
        'unitCost' => 'float',
        'foreignCurrencyUnitCost' => 'float',
        'memo' => 'string',
        'currency' => 'string',
        'expirationDate' => 'dateTime',
        'exchangeRate' => 'float',
    ];
}
