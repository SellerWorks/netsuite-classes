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
 * InventoryTransferInventory.
 */
class InventoryTransferInventory
{
    /**
     * @var int
     */
    public $line;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $adjustQtyBy;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $fromBinNumbers;
    /**
     * @var string
     */
    public $toBinNumbers;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'line' => 'integer',
        'item' => 'RecordRef',
        'description' => 'string',
        'units' => 'RecordRef',
        'quantityOnHand' => 'float',
        'adjustQtyBy' => 'float',
        'serialNumbers' => 'string',
        'fromBinNumbers' => 'string',
        'toBinNumbers' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'customFieldList' => 'CustomFieldList',
    );
}
