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
 * AssemblyUnbuild.
 */
class AssemblyUnbuild extends Record
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
    public $tranId;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $built;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $billOfMaterials;
    /**
     * @var RecordRef
     */
    public $billOfMaterialsRevision;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $binNumbers;
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
     * @var string
     */
    public $memo;
    /**
     * @var AssemblyComponentList
     */
    public $componentList;
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
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'tranId' => 'string',
        'item' => 'RecordRef',
        'built' => 'float',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'total' => 'float',
        'billOfMaterials' => 'RecordRef',
        'billOfMaterialsRevision' => 'RecordRef',
        'serialNumbers' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'binNumbers' => 'string',
        'subsidiary' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'memo' => 'string',
        'componentList' => 'AssemblyComponentList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
