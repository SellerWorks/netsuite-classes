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
 * BinWorksheetItem.
 */
class BinWorksheetItem
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $itemOnHand;
    /**
     * @var string
     */
    public $itemUnitsLabel;
    /**
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $itemBins;
    /**
     * @var string
     */
    public $itemBinNumbers;
    /**
     * @var string
     */
    public $itemBinList;
    /**
     * @var string
     */
    public $itemPreferBin;
    /**
     * @var string
     */
    public $itemBlank;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'itemName' => 'string',
        'description' => 'string',
        'quantity' => 'float',
        'itemOnHand' => 'string',
        'itemUnitsLabel' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'itemBins' => 'string',
        'itemBinNumbers' => 'string',
        'itemBinList' => 'string',
        'itemPreferBin' => 'string',
        'itemBlank' => 'string',
    ];
}
