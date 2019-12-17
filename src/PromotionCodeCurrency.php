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
 * PromotionCodeCurrency
 */
class PromotionCodeCurrency
{
    /**
     * @access public
     * @var RecordRef
     */
    public $currency;
    /**
     * @access public
     * @var float
     */
    public $minimumOrderAmount;

    public static $paramtypesmap = array(
        "currency" => "RecordRef",
        "minimumOrderAmount" => "float",
    );
}
