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
 * SerializedInventoryItemNumbers.
 */
class SerializedInventoryItemNumbers
{
    /**
     * @var RecordRef
     */
    public $serialNumber;

    public static $paramtypesmap = [
        'serialNumber' => 'RecordRef',
    ];
}
