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
 * PaymentMethodVisuals.
 */
class PaymentMethodVisuals
{
    /**
     * @var string
     */
    public $flags;
    /**
     * @var string
     */
    public $location;

    public static $paramtypesmap = [
        'flags' => 'string',
        'location' => 'string',
    ];
}
