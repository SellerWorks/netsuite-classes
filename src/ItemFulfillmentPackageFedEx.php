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
 * ItemFulfillmentPackageFedEx.
 */
class ItemFulfillmentPackageFedEx
{
    /**
     * @var float
     */
    public $packageWeightFedEx;
    /**
     * @var float
     */
    public $dryIceWeightFedEx;
    /**
     * @var string
     */
    public $packageTrackingNumberFedEx;
    /**
     * @var ItemFulfillmentPackageFedExPackagingFedEx
     */
    public $packagingFedEx;
    /**
     * @var ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    public $admPackageTypeFedEx;
    /**
     * @var bool
     */
    public $isNonStandardContainerFedEx;
    /**
     * @var bool
     */
    public $isAlcoholFedEx;
    /**
     * @var AlcoholRecipientType
     */
    public $alcoholRecipientTypeFedEx;
    /**
     * @var bool
     */
    public $isNonHazLithiumFedEx;
    /**
     * @var float
     */
    public $insuredValueFedEx;
    /**
     * @var bool
     */
    public $useInsuredValueFedEx;
    /**
     * @var string
     */
    public $reference1FedEx;
    /**
     * @var ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    public $priorityAlertTypeFedEx;
    /**
     * @var string
     */
    public $priorityAlertContentFedEx;
    /**
     * @var int
     */
    public $packageLengthFedEx;
    /**
     * @var int
     */
    public $packageWidthFedEx;
    /**
     * @var int
     */
    public $packageHeightFedEx;
    /**
     * @var bool
     */
    public $useCodFedEx;
    /**
     * @var float
     */
    public $codAmountFedEx;
    /**
     * @var ItemFulfillmentPackageFedExCodMethodFedEx
     */
    public $codMethodFedEx;
    /**
     * @var ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    public $codFreightTypeFedEx;
    /**
     * @var ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    public $deliveryConfFedEx;
    /**
     * @var ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    public $signatureOptionsFedEx;
    /**
     * @var string
     */
    public $signatureReleaseFedEx;
    /**
     * @var string
     */
    public $authorizationNumberFedEx;

    public static $paramtypesmap = array(
        'packageWeightFedEx' => 'float',
        'dryIceWeightFedEx' => 'float',
        'packageTrackingNumberFedEx' => 'string',
        'packagingFedEx' => 'ItemFulfillmentPackageFedExPackagingFedEx',
        'admPackageTypeFedEx' => 'ItemFulfillmentPackageFedExAdmPackageTypeFedEx',
        'isNonStandardContainerFedEx' => 'boolean',
        'isAlcoholFedEx' => 'boolean',
        'alcoholRecipientTypeFedEx' => 'AlcoholRecipientType',
        'isNonHazLithiumFedEx' => 'boolean',
        'insuredValueFedEx' => 'float',
        'useInsuredValueFedEx' => 'boolean',
        'reference1FedEx' => 'string',
        'priorityAlertTypeFedEx' => 'ItemFulfillmentPackageFedExPriorityAlertTypeFedEx',
        'priorityAlertContentFedEx' => 'string',
        'packageLengthFedEx' => 'integer',
        'packageWidthFedEx' => 'integer',
        'packageHeightFedEx' => 'integer',
        'useCodFedEx' => 'boolean',
        'codAmountFedEx' => 'float',
        'codMethodFedEx' => 'ItemFulfillmentPackageFedExCodMethodFedEx',
        'codFreightTypeFedEx' => 'ItemFulfillmentPackageFedExCodFreightTypeFedEx',
        'deliveryConfFedEx' => 'ItemFulfillmentPackageFedExDeliveryConfFedEx',
        'signatureOptionsFedEx' => 'ItemFulfillmentPackageFedExSignatureOptionsFedEx',
        'signatureReleaseFedEx' => 'string',
        'authorizationNumberFedEx' => 'string',
    );
}
