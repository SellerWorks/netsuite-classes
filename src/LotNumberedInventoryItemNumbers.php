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
 * LotNumberedInventoryItemNumbers.
 */
class LotNumberedInventoryItemNumbers
{
    /**
     * @var RecordRef
     */
    public $serialNumber;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var dateTime
     */
    public $expirationDate;

    public static $paramtypesmap = [
        'serialNumber' => 'RecordRef',
        'quantityOnHand' => 'float',
        'expirationDate' => 'dateTime',
    ];
}
