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
 * PurchaseRequisitionExpense.
 */
class PurchaseRequisitionExpense
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
    public $location;
    /**
     * @var bool
     */
    public $isClosed;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $poVendor;
    /**
     * @var float
     */
    public $estimatedAmount;
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
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRefList
     */
    public $linkedOrderList;
    /**
     * @var string
     */
    public $linkedOrderStatus;
    /**
     * @var bool
     */
    public $isBillable;

    public static $paramtypesmap = array(
        'line' => 'integer',
        'category' => 'RecordRef',
        'location' => 'RecordRef',
        'isClosed' => 'boolean',
        'account' => 'RecordRef',
        'poVendor' => 'RecordRef',
        'estimatedAmount' => 'float',
        'amount' => 'float',
        'memo' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'customer' => 'RecordRef',
        'linkedOrderList' => 'RecordRefList',
        'linkedOrderStatus' => 'string',
        'isBillable' => 'boolean',
    );
}
