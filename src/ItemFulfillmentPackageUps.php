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
 * ItemFulfillmentPackageUps.
 */
class ItemFulfillmentPackageUps
{
    /**
     * @var float
     */
    public $packageWeightUps;
    /**
     * @var string
     */
    public $packageDescrUps;
    /**
     * @var string
     */
    public $packageTrackingNumberUps;
    /**
     * @var ItemFulfillmentPackageUpsPackagingUps
     */
    public $packagingUps;
    /**
     * @var bool
     */
    public $useInsuredValueUps;
    /**
     * @var float
     */
    public $insuredValueUps;
    /**
     * @var string
     */
    public $reference1Ups;
    /**
     * @var string
     */
    public $reference2Ups;
    /**
     * @var int
     */
    public $packageLengthUps;
    /**
     * @var int
     */
    public $packageWidthUps;
    /**
     * @var int
     */
    public $packageHeightUps;
    /**
     * @var bool
     */
    public $additionalHandlingUps;
    /**
     * @var bool
     */
    public $useCodUps;
    /**
     * @var float
     */
    public $codAmountUps;
    /**
     * @var ItemFulfillmentPackageUpsCodMethodUps
     */
    public $codMethodUps;
    /**
     * @var ItemFulfillmentPackageUpsDeliveryConfUps
     */
    public $deliveryConfUps;

    public static $paramtypesmap = array(
        'packageWeightUps' => 'float',
        'packageDescrUps' => 'string',
        'packageTrackingNumberUps' => 'string',
        'packagingUps' => 'ItemFulfillmentPackageUpsPackagingUps',
        'useInsuredValueUps' => 'boolean',
        'insuredValueUps' => 'float',
        'reference1Ups' => 'string',
        'reference2Ups' => 'string',
        'packageLengthUps' => 'integer',
        'packageWidthUps' => 'integer',
        'packageHeightUps' => 'integer',
        'additionalHandlingUps' => 'boolean',
        'useCodUps' => 'boolean',
        'codAmountUps' => 'float',
        'codMethodUps' => 'ItemFulfillmentPackageUpsCodMethodUps',
        'deliveryConfUps' => 'ItemFulfillmentPackageUpsDeliveryConfUps',
    );
}
