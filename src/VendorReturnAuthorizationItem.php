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
 * VendorReturnAuthorizationItem.
 */
class VendorReturnAuthorizationItem
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
     * @var int
     */
    public $orderLine;
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
     * @var RecordRefList
     */
    public $serialNumbersList;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $binNumbers;
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
     * @var float
     */
    public $tax1Amt;
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
     * @var bool
     */
    public $isClosed;
    /**
     * @var RecordRef
     */
    public $amortizationSched;
    /**
     * @var bool
     */
    public $isDropShipment;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $taxDetailsReference;
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
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'vendorName' => 'string',
        'line' => 'integer',
        'orderLine' => 'integer',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbersList' => 'RecordRefList',
        'description' => 'string',
        'binNumbers' => 'string',
        'rate' => 'string',
        'amount' => 'float',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'grossAmt' => 'float',
        'tax1Amt' => 'float',
        'options' => 'CustomFieldList',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'isClosed' => 'boolean',
        'amortizationSched' => 'RecordRef',
        'isDropShipment' => 'boolean',
        'taxAmount' => 'float',
        'taxDetailsReference' => 'string',
        'amortizStartDate' => 'dateTime',
        'amortizationEndDate' => 'dateTime',
        'amortizationResidual' => 'string',
        'customFieldList' => 'CustomFieldList',
    ];
}
