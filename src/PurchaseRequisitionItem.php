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
 * PurchaseRequisitionItem.
 */
class PurchaseRequisitionItem
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
     * @var string
     */
    public $vendorName;
    /**
     * @var RecordRef
     */
    public $poVendor;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $estimatedRate;
    /**
     * @var float
     */
    public $estimatedAmount;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var CustomFieldList
     */
    public $options;
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
    public $customer;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRefList
     */
    public $linkedOrderList;
    /**
     * @var string
     */
    public $linkedOrderStatus;
    /**
     * @var dateTime
     */
    public $expectedReceiptDate;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var bool
     */
    public $expandItemGroup;

    public static $paramtypesmap = array(
        'line' => 'integer',
        'item' => 'RecordRef',
        'vendorName' => 'string',
        'poVendor' => 'RecordRef',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'serialNumbers' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'description' => 'string',
        'estimatedRate' => 'float',
        'estimatedAmount' => 'float',
        'rate' => 'string',
        'amount' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'grossAmt' => 'float',
        'options' => 'CustomFieldList',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'linkedOrderList' => 'RecordRefList',
        'linkedOrderStatus' => 'string',
        'expectedReceiptDate' => 'dateTime',
        'isClosed' => 'boolean',
        'expandItemGroup' => 'boolean',
    );
}
