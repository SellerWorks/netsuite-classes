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
 * ItemFulfillmentPackage.
 */
class ItemFulfillmentPackage
{
    /**
     * @var float
     */
    public $packageWeight;
    /**
     * @var string
     */
    public $packageDescr;
    /**
     * @var string
     */
    public $packageTrackingNumber;

    public static $paramtypesmap = array(
        'packageWeight' => 'float',
        'packageDescr' => 'string',
        'packageTrackingNumber' => 'string',
    );
}
