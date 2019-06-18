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
 * InventoryNumberBinSearchRowBasic.
 */
class InventoryNumberBinSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $binNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $inventoryNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityAvailable;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityOnHand;

    public static $paramtypesmap = array(
        'binNumber' => 'SearchColumnSelectField[]',
        'inventoryNumber' => 'SearchColumnSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'quantityAvailable' => 'SearchColumnDoubleField[]',
        'quantityOnHand' => 'SearchColumnDoubleField[]',
    );
}
