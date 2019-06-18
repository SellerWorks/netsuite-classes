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
 * InventoryItemBinNumber.
 */
class InventoryItemBinNumber
{
    /**
     * @var RecordRef
     */
    public $binNumber;
    /**
     * @var string
     */
    public $onHand;
    /**
     * @var string
     */
    public $onHandAvail;
    /**
     * @var string
     */
    public $location;
    /**
     * @var bool
     */
    public $preferredBin;

    public static $paramtypesmap = array(
        'binNumber' => 'RecordRef',
        'onHand' => 'string',
        'onHandAvail' => 'string',
        'location' => 'string',
        'preferredBin' => 'boolean',
    );
}
