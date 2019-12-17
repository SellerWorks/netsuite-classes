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
 * PartnerPromoCode.
 */
class PartnerPromoCode
{
    /**
     * @var RecordRef
     */
    public $promoCode;
    /**
     * @var string
     */
    public $discount;
    /**
     * @var dateTime
     */
    public $endDate;

    public static $paramtypesmap = [
        'promoCode' => 'RecordRef',
        'discount' => 'string',
        'endDate' => 'dateTime',
    ];
}
