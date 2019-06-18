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
 * VendorBillItem.
 */
class VendorBillItem
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
    public $orderDoc;
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
     * @var dateTime
     */
    public $expirationDate;
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
     * @var RecordRef
     */
    public $landedCostCategory;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var TransactionBillVarianceStatus
     */
    public $billVarianceStatus;
    /**
     * @var RecordRefList
     */
    public $billreceiptsList;
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
     * @var LandedCost
     */
    public $landedCost;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'item' => 'RecordRef',
        'vendorName' => 'string',
        'line' => 'integer',
        'orderDoc' => 'integer',
        'orderLine' => 'integer',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'description' => 'string',
        'serialNumbers' => 'string',
        'binNumbers' => 'string',
        'expirationDate' => 'dateTime',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'grossAmt' => 'float',
        'tax1Amt' => 'float',
        'rate' => 'string',
        'amount' => 'float',
        'options' => 'CustomFieldList',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'landedCostCategory' => 'RecordRef',
        'isBillable' => 'boolean',
        'billVarianceStatus' => 'TransactionBillVarianceStatus',
        'billreceiptsList' => 'RecordRefList',
        'amortizationSched' => 'RecordRef',
        'amortizStartDate' => 'dateTime',
        'amortizationEndDate' => 'dateTime',
        'amortizationResidual' => 'string',
        'taxAmount' => 'float',
        'taxDetailsReference' => 'string',
        'landedCost' => 'LandedCost',
        'customFieldList' => 'CustomFieldList',
    );
}
