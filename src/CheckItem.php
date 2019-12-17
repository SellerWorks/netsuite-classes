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
 * CheckItem.
 */
class CheckItem
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
    public $binNumbers;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var RecordRef
     */
    public $taxCode;
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
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var float
     */
    public $tax1Amt;
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
     * @var LandedCost
     */
    public $landedCost;
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
        'binNumbers' => 'string',
        'serialNumbers' => 'string',
        'expirationDate' => 'dateTime',
        'rate' => 'string',
        'taxCode' => 'RecordRef',
        'amount' => 'float',
        'options' => 'CustomFieldList',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'department' => 'RecordRef',
        'grossAmt' => 'float',
        'class' => 'RecordRef',
        'tax1Amt' => 'float',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'landedCost' => 'LandedCost',
        'customFieldList' => 'CustomFieldList',
    ];
}
