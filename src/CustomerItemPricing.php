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
 * CustomerItemPricing.
 */
class CustomerItemPricing
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $level;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $price;

    public static $paramtypesmap = array(
        'item' => 'RecordRef',
        'level' => 'RecordRef',
        'currency' => 'RecordRef',
        'price' => 'float',
    );
}
