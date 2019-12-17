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
 * ItemSupplyPlanSearchRowBasic.
 */
class ItemSupplyPlanSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $orderCreated;
    /**
     * @var SearchColumnDateField[]
     */
    public $orderDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $orderType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityUom;
    /**
     * @var SearchColumnDateField[]
     */
    public $receiptDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $units;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'location' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'orderCreated' => 'SearchColumnBooleanField[]',
        'orderDate' => 'SearchColumnDateField[]',
        'orderType' => 'SearchColumnSelectField[]',
        'quantity' => 'SearchColumnDoubleField[]',
        'quantityUom' => 'SearchColumnDoubleField[]',
        'receiptDate' => 'SearchColumnDateField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'units' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
