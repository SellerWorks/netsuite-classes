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
 * Rate.
 */
class Rate
{
    /**
     * @var float
     */
    public $value;
    /**
     * @var RecordRef
     */
    public $priceLevel;

    public static $paramtypesmap = array(
        'value' => 'float',
        'priceLevel' => 'RecordRef',
    );
}
