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
 * Pricing.
 */
class Pricing
{
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $priceLevel;
    /**
     * @var float
     */
    public $discount;
    /**
     * @var PriceList
     */
    public $priceList;

    public static $paramtypesmap = [
        'currency' => 'RecordRef',
        'priceLevel' => 'RecordRef',
        'discount' => 'float',
        'priceList' => 'PriceList',
    ];
}
