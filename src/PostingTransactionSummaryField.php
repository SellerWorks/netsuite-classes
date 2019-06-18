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
 * PostingTransactionSummaryField.
 */
class PostingTransactionSummaryField
{
    /**
     * @var bool
     */
    public $period;
    /**
     * @var bool
     */
    public $account;
    /**
     * @var bool
     */
    public $parentItem;
    /**
     * @var bool
     */
    public $item;
    /**
     * @var bool
     */
    public $entity;
    /**
     * @var bool
     */
    public $department;
    /**
     * @var bool
     */
    public $class;
    /**
     * @var bool
     */
    public $location;
    /**
     * @var bool
     */
    public $subsidiary;
    /**
     * @var bool
     */
    public $book;

    public static $paramtypesmap = array(
        'period' => 'boolean',
        'account' => 'boolean',
        'parentItem' => 'boolean',
        'item' => 'boolean',
        'entity' => 'boolean',
        'department' => 'boolean',
        'class' => 'boolean',
        'location' => 'boolean',
        'subsidiary' => 'boolean',
        'book' => 'boolean',
    );
}
