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
 * CustomPurchaseExpense.
 */
class CustomPurchaseExpense
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
     * @var float
     */
    public $grossAmt;
    /**
     * @var string
     */
    public $taxDetailsReference;
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
     * @var RecordRef
     */
    public $projectTask;
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
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'line' => 'integer',
        'category' => 'RecordRef',
        'account' => 'RecordRef',
        'amount' => 'float',
        'taxAmount' => 'float',
        'memo' => 'string',
        'grossAmt' => 'float',
        'taxDetailsReference' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'projectTask' => 'RecordRef',
        'amortizationSched' => 'RecordRef',
        'amortizStartDate' => 'dateTime',
        'amortizationEndDate' => 'dateTime',
        'amortizationResidual' => 'string',
        'customFieldList' => 'CustomFieldList',
    ];
}
