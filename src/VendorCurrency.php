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
 * VendorCurrency.
 */
class VendorCurrency
{
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $unbilledOrders;

    public static $paramtypesmap = [
        'currency' => 'RecordRef',
        'balance' => 'float',
        'unbilledOrders' => 'float',
    ];
}
