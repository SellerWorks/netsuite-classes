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
 * InboundShipmentItems.
 */
class InboundShipmentItems
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var RecordRef
     */
    public $purchaseOrder;
    /**
     * @var RecordRef
     */
    public $shipmentItem;
    /**
     * @var string
     */
    public $shipmentItemDescription;
    /**
     * @var string
     */
    public $poVendor;
    /**
     * @var RecordRef
     */
    public $receivingLocation;
    /**
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantityExpected;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var RecordRef
     */
    public $unit;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var float
     */
    public $expectedRate;
    /**
     * @var float
     */
    public $shipmentItemExchangeRate;
    /**
     * @var dateTime
     */
    public $shipmentItemEffectiveDate;
    /**
     * @var float
     */
    public $unitLandedCost;
    /**
     * @var float
     */
    public $totalUnitCost;
    /**
     * @var float
     */
    public $shipmentItemAmount;
    /**
     * @var RecordRef
     */
    public $poCurrency;
    /**
     * @var RecordRef
     */
    public $incoterm;

    public static $paramtypesmap = array(
        'id' => 'integer',
        'purchaseOrder' => 'RecordRef',
        'shipmentItem' => 'RecordRef',
        'shipmentItemDescription' => 'string',
        'poVendor' => 'string',
        'receivingLocation' => 'RecordRef',
        'quantityReceived' => 'float',
        'quantityExpected' => 'float',
        'quantityRemaining' => 'float',
        'unit' => 'RecordRef',
        'poRate' => 'float',
        'expectedRate' => 'float',
        'shipmentItemExchangeRate' => 'float',
        'shipmentItemEffectiveDate' => 'dateTime',
        'unitLandedCost' => 'float',
        'totalUnitCost' => 'float',
        'shipmentItemAmount' => 'float',
        'poCurrency' => 'RecordRef',
        'incoterm' => 'RecordRef',
    );
}
