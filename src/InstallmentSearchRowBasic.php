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
 * InstallmentSearchRowBasic.
 */
class InstallmentSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amountPaid;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amountRemaining;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysOverdue;
    /**
     * @var SearchColumnDateField[]
     */
    public $dueDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxAmountPaid;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxAmountRemaining;
    /**
     * @var SearchColumnLongField[]
     */
    public $installmentNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $status;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'amount' => 'SearchColumnDoubleField[]',
        'amountPaid' => 'SearchColumnDoubleField[]',
        'amountRemaining' => 'SearchColumnDoubleField[]',
        'daysOverdue' => 'SearchColumnLongField[]',
        'dueDate' => 'SearchColumnDateField[]',
        'fxAmount' => 'SearchColumnDoubleField[]',
        'fxAmountPaid' => 'SearchColumnDoubleField[]',
        'fxAmountRemaining' => 'SearchColumnDoubleField[]',
        'installmentNumber' => 'SearchColumnLongField[]',
        'status' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
