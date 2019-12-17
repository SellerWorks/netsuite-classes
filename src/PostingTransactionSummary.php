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
 * PostingTransactionSummary.
 */
class PostingTransactionSummary
{
    /**
     * @var RecordRef
     */
    public $period;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $parentItem;
    /**
     * @var RecordRef
     */
    public $item;
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
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $book;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = [
        'period' => 'RecordRef',
        'account' => 'RecordRef',
        'parentItem' => 'RecordRef',
        'item' => 'RecordRef',
        'entity' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'book' => 'RecordRef',
        'amount' => 'float',
    ];
}
