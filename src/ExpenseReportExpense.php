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
 * ExpenseReportExpense.
 */
class ExpenseReportExpense
{
    /**
     * @var int
     */
    public $line;
    /**
     * @var dateTime
     */
    public $expenseDate;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var float
     */
    public $foreignAmount;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRef
     */
    public $expMediaItem;
    /**
     * @var bool
     */
    public $isNonReimbursable;
    /**
     * @var bool
     */
    public $corporateCreditCard;
    /**
     * @var bool
     */
    public $receipt;
    /**
     * @var int
     */
    public $refNumber;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'line' => 'integer',
        'expenseDate' => 'dateTime',
        'category' => 'RecordRef',
        'quantity' => 'float',
        'rate' => 'float',
        'foreignAmount' => 'float',
        'currency' => 'RecordRef',
        'exchangeRate' => 'float',
        'amount' => 'float',
        'taxCode' => 'RecordRef',
        'memo' => 'string',
        'taxRate1' => 'float',
        'tax1Amt' => 'float',
        'department' => 'RecordRef',
        'grossAmt' => 'float',
        'taxRate2' => 'float',
        'class' => 'RecordRef',
        'customer' => 'RecordRef',
        'location' => 'RecordRef',
        'isBillable' => 'boolean',
        'expMediaItem' => 'RecordRef',
        'isNonReimbursable' => 'boolean',
        'corporateCreditCard' => 'boolean',
        'receipt' => 'boolean',
        'refNumber' => 'integer',
        'customFieldList' => 'CustomFieldList',
    ];
}
