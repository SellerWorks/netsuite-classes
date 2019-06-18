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
 * ItemFulfillmentPackageUsps.
 */
class ItemFulfillmentPackageUsps
{
    /**
     * @var float
     */
    public $packageWeightUsps;
    /**
     * @var string
     */
    public $packageDescrUsps;
    /**
     * @var string
     */
    public $packageTrackingNumberUsps;
    /**
     * @var ItemFulfillmentPackageUspsPackagingUsps
     */
    public $packagingUsps;
    /**
     * @var bool
     */
    public $useInsuredValueUsps;
    /**
     * @var float
     */
    public $insuredValueUsps;
    /**
     * @var string
     */
    public $reference1Usps;
    /**
     * @var string
     */
    public $reference2Usps;
    /**
     * @var int
     */
    public $packageLengthUsps;
    /**
     * @var int
     */
    public $packageWidthUsps;
    /**
     * @var int
     */
    public $packageHeightUsps;
    /**
     * @var ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    public $deliveryConfUsps;

    public static $paramtypesmap = array(
        'packageWeightUsps' => 'float',
        'packageDescrUsps' => 'string',
        'packageTrackingNumberUsps' => 'string',
        'packagingUsps' => 'ItemFulfillmentPackageUspsPackagingUsps',
        'useInsuredValueUsps' => 'boolean',
        'insuredValueUsps' => 'float',
        'reference1Usps' => 'string',
        'reference2Usps' => 'string',
        'packageLengthUsps' => 'integer',
        'packageWidthUsps' => 'integer',
        'packageHeightUsps' => 'integer',
        'deliveryConfUsps' => 'ItemFulfillmentPackageUspsDeliveryConfUsps',
    );
}
