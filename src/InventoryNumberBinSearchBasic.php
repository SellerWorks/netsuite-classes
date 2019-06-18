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
 * InventoryNumberBinSearchBasic.
 */
class InventoryNumberBinSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $binNumber;
    /**
     * @var SearchStringField
     */
    public $inventoryNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchDoubleField
     */
    public $quantityAvailable;
    /**
     * @var SearchDoubleField
     */
    public $quantityOnHand;

    public static $paramtypesmap = array(
        'binNumber' => 'SearchMultiSelectField',
        'inventoryNumber' => 'SearchStringField',
        'location' => 'SearchMultiSelectField',
        'quantityAvailable' => 'SearchDoubleField',
        'quantityOnHand' => 'SearchDoubleField',
    );
}
