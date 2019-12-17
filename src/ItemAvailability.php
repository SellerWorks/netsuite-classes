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
 * ItemAvailability.
 */
class ItemAvailability
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var dateTime
     */
    public $lastQtyAvailableChange;
    /**
     * @var RecordRef
     */
    public $locationId;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityAvailable;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'lastQtyAvailableChange' => 'dateTime',
        'locationId' => 'RecordRef',
        'quantityOnHand' => 'float',
        'onHandValueMli' => 'float',
        'reorderPoint' => 'float',
        'preferredStockLevel' => 'float',
        'quantityOnOrder' => 'float',
        'quantityCommitted' => 'float',
        'quantityBackOrdered' => 'float',
        'quantityAvailable' => 'float',
    ];
}
