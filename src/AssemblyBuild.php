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
 * AssemblyBuild.
 */
class AssemblyBuild extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $createdFrom;
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
    public $buildable;
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
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
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
     * @var RecordRef
     */
    public $revision;
    /**
     * @var RecordRef
     */
    public $billOfMaterialsRevision;
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'expirationDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'createdFrom' => 'RecordRef',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'tranId' => 'string',
        'item' => 'RecordRef',
        'buildable' => 'float',
        'quantity' => 'float',
        'units' => 'RecordRef',
        'total' => 'float',
        'billOfMaterials' => 'RecordRef',
        'inventoryDetail' => 'InventoryDetail',
        'serialNumbers' => 'string',
        'binNumbers' => 'string',
        'subsidiary' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'revision' => 'RecordRef',
        'billOfMaterialsRevision' => 'RecordRef',
        'memo' => 'string',
        'componentList' => 'AssemblyComponentList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
