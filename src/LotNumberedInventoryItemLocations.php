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
 * LotNumberedInventoryItemLocations.
 */
class LotNumberedInventoryItemLocations
{
    /**
     * @var string
     */
    public $location;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var float
     */
    public $averageCostMli;
    /**
     * @var float
     */
    public $lastPurchasePriceMli;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var bool
     */
    public $locationAllowStorePickup;
    /**
     * @var float
     */
    public $locationStorePickupBufferStock;
    /**
     * @var float
     */
    public $locationQtyAvailForStorePickup;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var int
     */
    public $leadTime;
    /**
     * @var float
     */
    public $defaultReturnCost;
    /**
     * @var float
     */
    public $safetyStockLevel;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var RecordRef
     */
    public $inventoryCostTemplate;
    /**
     * @var float
     */
    public $buildTime;
    /**
     * @var dateTime
     */
    public $lastInvtCountDate;
    /**
     * @var dateTime
     */
    public $nextInvtCountDate;
    /**
     * @var bool
     */
    public $isWip;
    /**
     * @var int
     */
    public $invtCountInterval;
    /**
     * @var ItemInvtClassification
     */
    public $invtClassification;
    /**
     * @var float
     */
    public $costingLotSize;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var RecordRef
     */
    public $locationId;
    /**
     * @var RecordRef
     */
    public $locationlookup;
    /**
     * @var string
     */
    public $location_display;
    /**
     * @var RecordRef
     */
    public $supplyReplenishmentMethod;
    /**
     * @var RecordRef
     */
    public $alternateDemandSourceItem;
    /**
     * @var float
     */
    public $fixedLotSize;
    /**
     * @var PeriodicLotSizeType
     */
    public $periodicLotSizeType;
    /**
     * @var int
     */
    public $periodicLotSizeDays;
    /**
     * @var RecordRef
     */
    public $supplyType;
    /**
     * @var RecordRef
     */
    public $supplyLotSizingMethod;
    /**
     * @var RecordRef
     */
    public $demandSource;
    /**
     * @var int
     */
    public $backwardConsumptionDays;
    /**
     * @var int
     */
    public $forwardConsumptionDays;
    /**
     * @var int
     */
    public $demandTimeFence;
    /**
     * @var int
     */
    public $supplyTimeFence;
    /**
     * @var int
     */
    public $rescheduleInDays;
    /**
     * @var int
     */
    public $rescheduleOutDays;

    public static $paramtypesmap = array(
        'location' => 'string',
        'quantityOnHand' => 'float',
        'onHandValueMli' => 'float',
        'serialNumbers' => 'string',
        'expirationDate' => 'dateTime',
        'averageCostMli' => 'float',
        'lastPurchasePriceMli' => 'float',
        'reorderPoint' => 'float',
        'locationAllowStorePickup' => 'boolean',
        'locationStorePickupBufferStock' => 'float',
        'locationQtyAvailForStorePickup' => 'float',
        'preferredStockLevel' => 'float',
        'leadTime' => 'integer',
        'defaultReturnCost' => 'float',
        'safetyStockLevel' => 'float',
        'cost' => 'float',
        'inventoryCostTemplate' => 'RecordRef',
        'buildTime' => 'float',
        'lastInvtCountDate' => 'dateTime',
        'nextInvtCountDate' => 'dateTime',
        'isWip' => 'boolean',
        'invtCountInterval' => 'integer',
        'invtClassification' => 'ItemInvtClassification',
        'costingLotSize' => 'float',
        'quantityOnOrder' => 'float',
        'quantityCommitted' => 'float',
        'quantityAvailable' => 'float',
        'quantityBackOrdered' => 'float',
        'locationId' => 'RecordRef',
        'locationlookup' => 'RecordRef',
        'location_display' => 'string',
        'supplyReplenishmentMethod' => 'RecordRef',
        'alternateDemandSourceItem' => 'RecordRef',
        'fixedLotSize' => 'float',
        'periodicLotSizeType' => 'PeriodicLotSizeType',
        'periodicLotSizeDays' => 'integer',
        'supplyType' => 'RecordRef',
        'supplyLotSizingMethod' => 'RecordRef',
        'demandSource' => 'RecordRef',
        'backwardConsumptionDays' => 'integer',
        'forwardConsumptionDays' => 'integer',
        'demandTimeFence' => 'integer',
        'supplyTimeFence' => 'integer',
        'rescheduleInDays' => 'integer',
        'rescheduleOutDays' => 'integer',
    );
}
