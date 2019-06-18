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
 * WorkOrderCompletion.
 */
class WorkOrderCompletion extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $scrapQuantity;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var bool
     */
    public $isBackflush;
    /**
     * @var float
     */
    public $orderQuantity;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $subsidiary;
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
    public $revision;
    /**
     * @var RecordRef
     */
    public $startOperation;
    /**
     * @var RecordRef
     */
    public $endOperation;
    /**
     * @var float
     */
    public $completedQuantity;
    /**
     * @var RecordRef
     */
    public $manufacturingRouting;
    /**
     * @var WorkOrderCompletionComponentList
     */
    public $componentList;
    /**
     * @var WorkOrderCompletionOperationList
     */
    public $operationList;
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'tranId' => 'string',
        'item' => 'RecordRef',
        'quantity' => 'float',
        'scrapQuantity' => 'float',
        'units' => 'RecordRef',
        'isBackflush' => 'boolean',
        'orderQuantity' => 'float',
        'total' => 'float',
        'createdFrom' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'memo' => 'string',
        'subsidiary' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'revision' => 'RecordRef',
        'startOperation' => 'RecordRef',
        'endOperation' => 'RecordRef',
        'completedQuantity' => 'float',
        'manufacturingRouting' => 'RecordRef',
        'componentList' => 'WorkOrderCompletionComponentList',
        'operationList' => 'WorkOrderCompletionOperationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
