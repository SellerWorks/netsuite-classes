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
 * InventoryAdjustment.
 */
class InventoryAdjustment extends Record
{
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var float
     */
    public $estimatedTotalValue;
    /**
     * @var RecordRef
     */
    public $customer;
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
    public $adjLocation;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var InventoryAdjustmentInventoryList
     */
    public $inventoryList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'postingPeriod' => 'RecordRef',
        'tranDate' => 'dateTime',
        'createdDate' => 'dateTime',
        'tranId' => 'string',
        'lastModifiedDate' => 'dateTime',
        'subsidiary' => 'RecordRef',
        'account' => 'RecordRef',
        'customForm' => 'RecordRef',
        'estimatedTotalValue' => 'float',
        'customer' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'adjLocation' => 'RecordRef',
        'location' => 'RecordRef',
        'memo' => 'string',
        'inventoryList' => 'InventoryAdjustmentInventoryList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
