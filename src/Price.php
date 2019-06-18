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
 * Price.
 */
class Price
{
    /**
     * @var float
     */
    public $value;
    /**
     * @var float
     */
    public $quantity;

    public static $paramtypesmap = array(
        'value' => 'float',
        'quantity' => 'float',
    );
}
