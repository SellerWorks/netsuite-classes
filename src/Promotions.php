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
 * Promotions.
 */
class Promotions
{
    /**
     * @var RecordRef
     */
    public $promoCode;
    /**
     * @var RecordRef
     */
    public $couponCode;

    public static $paramtypesmap = array(
        'promoCode' => 'RecordRef',
        'couponCode' => 'RecordRef',
    );
}
