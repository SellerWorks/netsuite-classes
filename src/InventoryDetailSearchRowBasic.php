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
 * InventoryDetailSearchRowBasic.
 */
class InventoryDetailSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $binNumber;
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
    public $inventoryNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantity;

    public static $paramtypesmap = array(
        'binNumber' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'inventoryNumber' => 'SearchColumnSelectField[]',
        'quantity' => 'SearchColumnDoubleField[]',
    );
}
