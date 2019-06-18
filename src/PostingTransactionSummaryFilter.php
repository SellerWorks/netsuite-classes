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
 * PostingTransactionSummaryFilter.
 */
class PostingTransactionSummaryFilter
{
    /**
     * @var RecordRefList
     */
    public $period;
    /**
     * @var RecordRefList
     */
    public $account;
    /**
     * @var RecordRefList
     */
    public $parentItem;
    /**
     * @var RecordRefList
     */
    public $item;
    /**
     * @var RecordRefList
     */
    public $entity;
    /**
     * @var RecordRefList
     */
    public $department;
    /**
     * @var RecordRefList
     */
    public $class;
    /**
     * @var RecordRefList
     */
    public $location;
    /**
     * @var RecordRefList
     */
    public $subsidiary;
    /**
     * @var RecordRefList
     */
    public $book;

    public static $paramtypesmap = [
        'period' => 'RecordRefList',
        'account' => 'RecordRefList',
        'parentItem' => 'RecordRefList',
        'item' => 'RecordRefList',
        'entity' => 'RecordRefList',
        'department' => 'RecordRefList',
        'class' => 'RecordRefList',
        'location' => 'RecordRefList',
        'subsidiary' => 'RecordRefList',
        'book' => 'RecordRefList',
    ];
}
