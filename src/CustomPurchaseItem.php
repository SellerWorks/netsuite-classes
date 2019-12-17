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
 * CustomPurchaseItem.
 */
class CustomPurchaseItem
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var int
     */
    public $line;
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
    public $description;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var float
     */
    public $grossAmt;
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
     * @var RecordRef
     */
    public $amortizationSched;
    /**
     * @var dateTime
     */
    public $amortizStartDate;
    /**
     * @var dateTime
     */
    public $amortizationEndDate;
    /**
     * @var string
     */
    public $amortizationResidual;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'vendorName' => 'string',
        'line' => 'integer',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'description' => 'string',
        'serialNumbers' => 'string',
        'binNumbers' => 'string',
        'grossAmt' => 'float',
        'rate' => 'string',
        'amount' => 'float',
        'options' => 'CustomFieldList',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'billVarianceStatus' => 'TransactionBillVarianceStatus',
        'amortizationSched' => 'RecordRef',
        'amortizStartDate' => 'dateTime',
        'amortizationEndDate' => 'dateTime',
        'amortizationResidual' => 'string',
        'taxAmount' => 'float',
        'taxDetailsReference' => 'string',
        'customFieldList' => 'CustomFieldList',
    ];
}
