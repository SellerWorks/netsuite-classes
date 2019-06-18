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
 * CustomTransactionLine.
 */
class CustomTransactionLine
{
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $debit;
    /**
     * @var float
     */
    public $credit;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $entity;
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
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'account' => 'RecordRef',
        'line' => 'integer',
        'debit' => 'float',
        'credit' => 'float',
        'amount' => 'float',
        'memo' => 'string',
        'entity' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    ];
}
