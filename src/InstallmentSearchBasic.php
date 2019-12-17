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
 * InstallmentSearchBasic.
 */
class InstallmentSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchDoubleField
     */
    public $amountPaid;
    /**
     * @var SearchDoubleField
     */
    public $amountRemaining;
    /**
     * @var SearchLongField
     */
    public $daysOverdue;
    /**
     * @var SearchDateField
     */
    public $dueDate;
    /**
     * @var SearchDoubleField
     */
    public $fxAmount;
    /**
     * @var SearchDoubleField
     */
    public $fxAmountPaid;
    /**
     * @var SearchDoubleField
     */
    public $fxAmountRemaining;
    /**
     * @var SearchLongField
     */
    public $installmentNumber;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'amount' => 'SearchDoubleField',
        'amountPaid' => 'SearchDoubleField',
        'amountRemaining' => 'SearchDoubleField',
        'daysOverdue' => 'SearchLongField',
        'dueDate' => 'SearchDateField',
        'fxAmount' => 'SearchDoubleField',
        'fxAmountPaid' => 'SearchDoubleField',
        'fxAmountRemaining' => 'SearchDoubleField',
        'installmentNumber' => 'SearchLongField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
