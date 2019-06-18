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
 * PurchaseOrderItem.
 */
class PurchaseOrderItem
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
    public $quantityOnShipments;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantityBilled;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOnHand;
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
    public $quantity;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $grossAmt;
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
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $purchaseContract;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var CustomFieldList
     */
    public $options;
    /**
     * @var float
     */
    public $taxAmount;
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
    public $landedCostCategory;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var TransactionBillVarianceStatus
     */
    public $billVarianceStatus;
    /**
     * @var bool
     */
    public $matchBillToReceipt;
    /**
     * @var dateTime
     */
    public $expectedReceiptDate;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRefList
     */
    public $linkedOrderList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'item' => 'RecordRef',
        'line' => 'integer',
        'quantityOnShipments' => 'float',
        'vendorName' => 'string',
        'quantityReceived' => 'float',
        'quantityBilled' => 'float',
        'quantityAvailable' => 'float',
        'quantityOnHand' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'quantity' => 'float',
        'tax1Amt' => 'float',
        'grossAmt' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'description' => 'string',
        'purchaseContract' => 'RecordRef',
        'rate' => 'string',
        'amount' => 'float',
        'options' => 'CustomFieldList',
        'taxAmount' => 'float',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'landedCostCategory' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'billVarianceStatus' => 'TransactionBillVarianceStatus',
        'matchBillToReceipt' => 'boolean',
        'expectedReceiptDate' => 'dateTime',
        'isClosed' => 'boolean',
        'taxDetailsReference' => 'string',
        'createdFrom' => 'RecordRef',
        'linkedOrderList' => 'RecordRefList',
        'customFieldList' => 'CustomFieldList',
    );
}
