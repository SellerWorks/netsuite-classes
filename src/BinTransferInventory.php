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
 * BinTransferInventory.
 */
class BinTransferInventory
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
     * @var string
     */
    public $preferredBin;
    /**
     * @var float
     */
    public $quantity;
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
    public $fromBins;
    /**
     * @var string
     */
    public $toBins;

    public static $paramtypesmap = [
        'line' => 'integer',
        'item' => 'RecordRef',
        'description' => 'string',
        'preferredBin' => 'string',
        'quantity' => 'float',
        'itemUnitsLabel' => 'string',
        'inventoryDetail' => 'InventoryDetail',
        'fromBins' => 'string',
        'toBins' => 'string',
    ];
}
