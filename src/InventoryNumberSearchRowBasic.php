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
 * InventoryNumberSearchRowBasic.
 */
class InventoryNumberSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDateField[]
     */
    public $expirationDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $inventoryNumber;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isonhand;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityavailable;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityintransit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityonhand;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityonorder;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'expirationDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'inventoryNumber' => 'SearchColumnStringField[]',
        'isonhand' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'quantityavailable' => 'SearchColumnDoubleField[]',
        'quantityintransit' => 'SearchColumnDoubleField[]',
        'quantityonhand' => 'SearchColumnDoubleField[]',
        'quantityonorder' => 'SearchColumnDoubleField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
