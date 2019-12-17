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
 * PurchaseOrderExpense.
 */
class PurchaseOrderExpense
{
    /**
     * @var int
     */
    public $line;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var RecordRefList
     */
    public $linkedOrderList;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $memo;
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
    public $isClosed;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRef
     */
    public $createdFrom;
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
    public $tax1Amt;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'line' => 'integer',
        'category' => 'RecordRef',
        'linkedOrderList' => 'RecordRefList',
        'account' => 'RecordRef',
        'amount' => 'float',
        'taxAmount' => 'float',
        'memo' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'isClosed' => 'boolean',
        'isBillable' => 'boolean',
        'createdFrom' => 'RecordRef',
        'taxCode' => 'RecordRef',
        'taxRate1' => 'float',
        'taxRate2' => 'float',
        'tax1Amt' => 'float',
        'grossAmt' => 'float',
        'taxDetailsReference' => 'string',
        'customFieldList' => 'CustomFieldList',
    ];
}
