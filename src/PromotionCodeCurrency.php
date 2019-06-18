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
 * PromotionCodeCurrency.
 */
class PromotionCodeCurrency
{
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $minimumOrderAmount;

    public static $paramtypesmap = [
        'currency' => 'RecordRef',
        'minimumOrderAmount' => 'float',
    ];
}
