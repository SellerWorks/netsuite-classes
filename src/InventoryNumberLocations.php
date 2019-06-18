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
 * InventoryNumberLocations.
 */
class InventoryNumberLocations
{
    /**
     * @var string
     */
    public $location;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var float
     */
    public $quantityInTransit;

    public static $paramtypesmap = array(
        'location' => 'string',
        'quantityOnHand' => 'float',
        'quantityAvailable' => 'float',
        'quantityOnOrder' => 'float',
        'quantityInTransit' => 'float',
    );
}
