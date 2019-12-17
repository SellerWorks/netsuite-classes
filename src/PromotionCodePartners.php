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
 * PromotionCodePartners.
 */
class PromotionCodePartners
{
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var string
     */
    public $code;

    public static $paramtypesmap = [
        'partner' => 'RecordRef',
        'code' => 'string',
    ];
}
