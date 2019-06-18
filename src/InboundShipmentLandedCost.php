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
 * InboundShipmentLandedCost.
 */
class InboundShipmentLandedCost
{
    /**
     * @var RecordRef
     */
    public $landedCostCostCategory;
    /**
     * @var float
     */
    public $landedCostAmount;
    /**
     * @var RecordRef
     */
    public $landedCostCurrency;
    /**
     * @var float
     */
    public $landedCostExchangeRate;
    /**
     * @var dateTime
     */
    public $landedCostEffectiveDate;
    /**
     * @var InboundShipmentLandedCostAllocationMethod
     */
    public $landedCostAllocationMethod;
    /**
     * @var RecordRefList
     */
    public $landedCostShipmentItemsList;

    public static $paramtypesmap = array(
        'landedCostCostCategory' => 'RecordRef',
        'landedCostAmount' => 'float',
        'landedCostCurrency' => 'RecordRef',
        'landedCostExchangeRate' => 'float',
        'landedCostEffectiveDate' => 'dateTime',
        'landedCostAllocationMethod' => 'InboundShipmentLandedCostAllocationMethod',
        'landedCostShipmentItemsList' => 'RecordRefList',
    );
}
