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
 * InventoryItem.
 */
class InventoryItem extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $purchaseDescription;
    /**
     * @var bool
     */
    public $copyDescription;
    /**
     * @var RecordRef
     */
    public $expenseAccount;
    /**
     * @var dateTime
     */
    public $dateConvertedToInv;
    /**
     * @var ItemType
     */
    public $originalItemType;
    /**
     * @var ItemSubType
     */
    public $originalItemSubtype;
    /**
     * @var RecordRef
     */
    public $cogsAccount;
    /**
     * @var RecordRef
     */
    public $intercoCogsAccount;
    /**
     * @var string
     */
    public $salesDescription;
    /**
     * @var InventoryItemFraudRisk
     */
    public $fraudRisk;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $incomeAccount;
    /**
     * @var RecordRef
     */
    public $intercoIncomeAccount;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var RecordRef
     */
    public $dropshipExpenseAccount;
    /**
     * @var bool
     */
    public $deferRevRec;
    /**
     * @var RecordRef
     */
    public $revenueRecognitionRule;
    /**
     * @var RecordRef
     */
    public $revRecForecastRule;
    /**
     * @var RecordRef
     */
    public $revenueAllocationGroup;
    /**
     * @var RecordRef
     */
    public $createRevenuePlansOn;
    /**
     * @var bool
     */
    public $directRevenuePosting;
    /**
     * @var bool
     */
    public $contingentRevenueHandling;
    /**
     * @var RecordRef
     */
    public $revReclassFXAccount;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var ItemMatrixType
     */
    public $matrixType;
    /**
     * @var RecordRef
     */
    public $assetAccount;
    /**
     * @var bool
     */
    public $matchBillToReceipt;
    /**
     * @var RecordRef
     */
    public $billQtyVarianceAcct;
    /**
     * @var RecordRef
     */
    public $billPriceVarianceAcct;
    /**
     * @var RecordRef
     */
    public $billExchRateVarianceAcct;
    /**
     * @var RecordRef
     */
    public $gainLossAccount;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var string
     */
    public $shippingCostUnits;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $handlingCostUnits;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var ItemWeightUnit
     */
    public $weightUnit;
    /**
     * @var string
     */
    public $weightUnits;
    /**
     * @var string
     */
    public $costingMethodDisplay;
    /**
     * @var RecordRef
     */
    public $unitsType;
    /**
     * @var RecordRef
     */
    public $stockUnit;
    /**
     * @var RecordRef
     */
    public $purchaseUnit;
    /**
     * @var RecordRef
     */
    public $saleUnit;
    /**
     * @var RecordRef
     */
    public $issueProduct;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var bool
     */
    public $trackLandedCost;
    /**
     * @var string
     */
    public $matrixItemNameTemplate;
    /**
     * @var bool
     */
    public $isDropShipItem;
    /**
     * @var bool
     */
    public $isSpecialOrderItem;
    /**
     * @var string
     */
    public $stockDescription;
    /**
     * @var RecordRef
     */
    public $deferredRevenueAccount;
    /**
     * @var RecordRef
     */
    public $intercoDefRevAccount;
    /**
     * @var bool
     */
    public $producer;
    /**
     * @var string
     */
    public $manufacturer;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $mpn;
    /**
     * @var bool
     */
    public $multManufactureAddr;
    /**
     * @var string
     */
    public $manufacturerAddr1;
    /**
     * @var string
     */
    public $manufacturerCity;
    /**
     * @var string
     */
    public $manufacturerState;
    /**
     * @var string
     */
    public $manufacturerZip;
    /**
     * @var Country
     */
    public $countryOfManufacture;
    /**
     * @var bool
     */
    public $roundUpAsComponent;
    /**
     * @var float
     */
    public $purchaseOrderQuantity;
    /**
     * @var float
     */
    public $purchaseOrderAmount;
    /**
     * @var float
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var float
     */
    public $receiptQuantity;
    /**
     * @var float
     */
    public $receiptAmount;
    /**
     * @var float
     */
    public $receiptQuantityDiff;
    /**
     * @var RecordRef
     */
    public $defaultItemShipMethod;
    /**
     * @var ShippingCarrier
     */
    public $itemCarrier;
    /**
     * @var RecordRefList
     */
    public $itemShipMethodList;
    /**
     * @var string
     */
    public $manufacturerTaxId;
    /**
     * @var string
     */
    public $scheduleBNumber;
    /**
     * @var int
     */
    public $scheduleBQuantity;
    /**
     * @var ScheduleBCode
     */
    public $scheduleBCode;
    /**
     * @var string
     */
    public $manufacturerTariff;
    /**
     * @var ItemPreferenceCriterion
     */
    public $preferenceCriterion;
    /**
     * @var int
     */
    public $minimumQuantity;
    /**
     * @var bool
     */
    public $enforceMinQtyInternally;
    /**
     * @var int
     */
    public $maximumQuantity;
    /**
     * @var string
     */
    public $minimumQuantityUnits;
    /**
     * @var RecordRef
     */
    public $softDescriptor;
    /**
     * @var RecordRef
     */
    public $shipPackage;
    /**
     * @var bool
     */
    public $shipIndividually;
    /**
     * @var RecordRef
     */
    public $costCategory;
    /**
     * @var bool
     */
    public $pricesIncludeTax;
    /**
     * @var RecordRef
     */
    public $purchasePriceVarianceAcct;
    /**
     * @var RecordRef
     */
    public $quantityPricingSchedule;
    /**
     * @var string
     */
    public $reorderPointUnits;
    /**
     * @var bool
     */
    public $useMarginalRates;
    /**
     * @var string
     */
    public $preferredStockLevelUnits;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var float
     */
    public $transferPrice;
    /**
     * @var ItemOverallQuantityPricingType
     */
    public $overallQuantityPricingType;
    /**
     * @var RecordRef
     */
    public $pricingGroup;
    /**
     * @var float
     */
    public $vsoePrice;
    /**
     * @var VsoeSopGroup
     */
    public $vsoeSopGroup;
    /**
     * @var string
     */
    public $costEstimateUnits;
    /**
     * @var VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @var VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @var bool
     */
    public $vsoeDelivered;
    /**
     * @var RecordRef
     */
    public $itemRevenueCategory;
    /**
     * @var RecordRef
     */
    public $preferredLocation;
    /**
     * @var bool
     */
    public $isStorePickupAllowed;
    /**
     * @var int
     */
    public $reorderMultiple;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var dateTime
     */
    public $lastInvtCountDate;
    /**
     * @var dateTime
     */
    public $nextInvtCountDate;
    /**
     * @var int
     */
    public $invtCountInterval;
    /**
     * @var ItemInvtClassification
     */
    public $invtClassification;
    /**
     * @var string
     */
    public $costUnits;
    /**
     * @var float
     */
    public $totalValue;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var bool
     */
    public $useBins;
    /**
     * @var string
     */
    public $quantityReorderUnits;
    /**
     * @var int
     */
    public $leadTime;
    /**
     * @var bool
     */
    public $autoLeadTime;
    /**
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var bool
     */
    public $autoPreferredStockLevel;
    /**
     * @var float
     */
    public $preferredStockLevelDays;
    /**
     * @var float
     */
    public $safetyStockLevel;
    /**
     * @var int
     */
    public $safetyStockLevelDays;
    /**
     * @var int
     */
    public $backwardConsumptionDays;
    /**
     * @var bool
     */
    public $seasonalDemand;
    /**
     * @var string
     */
    public $safetyStockLevelUnits;
    /**
     * @var float
     */
    public $demandModifier;
    /**
     * @var RecordRef
     */
    public $distributionNetwork;
    /**
     * @var RecordRef
     */
    public $distributionCategory;
    /**
     * @var bool
     */
    public $autoReorderPoint;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var RecordRef
     */
    public $storeDisplayThumbnail;
    /**
     * @var RecordRef
     */
    public $storeDisplayImage;
    /**
     * @var string
     */
    public $storeDescription;
    /**
     * @var string
     */
    public $storeDetailedDescription;
    /**
     * @var RecordRef
     */
    public $storeItemTemplate;
    /**
     * @var string
     */
    public $pageTitle;
    /**
     * @var string
     */
    public $metaTagHtml;
    /**
     * @var bool
     */
    public $excludeFromSitemap;
    /**
     * @var SitemapPriority
     */
    public $sitemapPriority;
    /**
     * @var string
     */
    public $searchKeywords;
    /**
     * @var bool
     */
    public $isDonationItem;
    /**
     * @var bool
     */
    public $showDefaultDonationAmount;
    /**
     * @var float
     */
    public $maxDonationAmount;
    /**
     * @var bool
     */
    public $dontShowPrice;
    /**
     * @var string
     */
    public $noPriceMessage;
    /**
     * @var string
     */
    public $outOfStockMessage;
    /**
     * @var bool
     */
    public $onSpecial;
    /**
     * @var ItemOutOfStockBehavior
     */
    public $outOfStockBehavior;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var string
     */
    public $shoppingDotComCategory;
    /**
     * @var int
     */
    public $shopzillaCategoryId;
    /**
     * @var string
     */
    public $nexTagCategory;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $upcCode;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var bool
     */
    public $isOnline;
    /**
     * @var bool
     */
    public $isHazmatItem;
    /**
     * @var string
     */
    public $hazmatId;
    /**
     * @var string
     */
    public $hazmatShippingName;
    /**
     * @var string
     */
    public $hazmatHazardClass;
    /**
     * @var HazmatPackingGroup
     */
    public $hazmatPackingGroup;
    /**
     * @var string
     */
    public $hazmatItemUnits;
    /**
     * @var float
     */
    public $hazmatItemUnitsQty;
    /**
     * @var bool
     */
    public $isGcoCompliant;
    /**
     * @var bool
     */
    public $offerSupport;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $availableToPartners;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var ItemCostingMethod
     */
    public $costingMethod;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var InventoryItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
    /**
     * @var ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var RecordRef
     */
    public $purchaseTaxCode;
    /**
     * @var float
     */
    public $defaultReturnCost;
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
     * @var RecordRef
     */
    public $supplyType;
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
    /**
     * @var int
     */
    public $periodicLotSizeDays;
    /**
     * @var RecordRef
     */
    public $supplyLotSizingMethod;
    /**
     * @var int
     */
    public $forwardConsumptionDays;
    /**
     * @var RecordRef
     */
    public $demandSource;
    /**
     * @var float
     */
    public $quantityBackOrdered;
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
    public $quantityOnHand;
    /**
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var string
     */
    public $quantityCommittedUnits;
    /**
     * @var RecordRef
     */
    public $salesTaxCode;
    /**
     * @var string
     */
    public $quantityAvailableUnits;
    /**
     * @var string
     */
    public $quantityOnHandUnits;
    /**
     * @var RecordRef
     */
    public $vendor;
    /**
     * @var string
     */
    public $quantityOnOrderUnits;
    /**
     * @var ProductFeedList
     */
    public $productFeedList;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var ItemVendorList
     */
    public $itemVendorList;
    /**
     * @var SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var TranslationList
     */
    public $translationsList;
    /**
     * @var InventoryItemBinNumberList
     */
    public $binNumberList;
    /**
     * @var InventoryItemLocationsList
     */
    public $locationsList;
    /**
     * @var MatrixOptionList
     */
    public $matrixOptionList;
    /**
     * @var PresentationItemList
     */
    public $presentationItemList;
    /**
     * @var int
     */
    public $futureHorizon;
    /**
     * @var RecordRef
     */
    public $consumptionUnit;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'purchaseDescription' => 'string',
        'copyDescription' => 'boolean',
        'expenseAccount' => 'RecordRef',
        'dateConvertedToInv' => 'dateTime',
        'originalItemType' => 'ItemType',
        'originalItemSubtype' => 'ItemSubType',
        'cogsAccount' => 'RecordRef',
        'intercoCogsAccount' => 'RecordRef',
        'salesDescription' => 'string',
        'fraudRisk' => 'InventoryItemFraudRisk',
        'includeChildren' => 'boolean',
        'incomeAccount' => 'RecordRef',
        'intercoIncomeAccount' => 'RecordRef',
        'taxSchedule' => 'RecordRef',
        'dropshipExpenseAccount' => 'RecordRef',
        'deferRevRec' => 'boolean',
        'revenueRecognitionRule' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'revenueAllocationGroup' => 'RecordRef',
        'createRevenuePlansOn' => 'RecordRef',
        'directRevenuePosting' => 'boolean',
        'contingentRevenueHandling' => 'boolean',
        'revReclassFXAccount' => 'RecordRef',
        'isTaxable' => 'boolean',
        'matrixType' => 'ItemMatrixType',
        'assetAccount' => 'RecordRef',
        'matchBillToReceipt' => 'boolean',
        'billQtyVarianceAcct' => 'RecordRef',
        'billPriceVarianceAcct' => 'RecordRef',
        'billExchRateVarianceAcct' => 'RecordRef',
        'gainLossAccount' => 'RecordRef',
        'shippingCost' => 'float',
        'shippingCostUnits' => 'string',
        'handlingCost' => 'float',
        'handlingCostUnits' => 'string',
        'weight' => 'float',
        'weightUnit' => 'ItemWeightUnit',
        'weightUnits' => 'string',
        'costingMethodDisplay' => 'string',
        'unitsType' => 'RecordRef',
        'stockUnit' => 'RecordRef',
        'purchaseUnit' => 'RecordRef',
        'saleUnit' => 'RecordRef',
        'issueProduct' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'trackLandedCost' => 'boolean',
        'matrixItemNameTemplate' => 'string',
        'isDropShipItem' => 'boolean',
        'isSpecialOrderItem' => 'boolean',
        'stockDescription' => 'string',
        'deferredRevenueAccount' => 'RecordRef',
        'intercoDefRevAccount' => 'RecordRef',
        'producer' => 'boolean',
        'manufacturer' => 'string',
        'revRecSchedule' => 'RecordRef',
        'mpn' => 'string',
        'multManufactureAddr' => 'boolean',
        'manufacturerAddr1' => 'string',
        'manufacturerCity' => 'string',
        'manufacturerState' => 'string',
        'manufacturerZip' => 'string',
        'countryOfManufacture' => 'Country',
        'roundUpAsComponent' => 'boolean',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'defaultItemShipMethod' => 'RecordRef',
        'itemCarrier' => 'ShippingCarrier',
        'itemShipMethodList' => 'RecordRefList',
        'manufacturerTaxId' => 'string',
        'scheduleBNumber' => 'string',
        'scheduleBQuantity' => 'integer',
        'scheduleBCode' => 'ScheduleBCode',
        'manufacturerTariff' => 'string',
        'preferenceCriterion' => 'ItemPreferenceCriterion',
        'minimumQuantity' => 'integer',
        'enforceMinQtyInternally' => 'boolean',
        'maximumQuantity' => 'integer',
        'minimumQuantityUnits' => 'string',
        'softDescriptor' => 'RecordRef',
        'shipPackage' => 'RecordRef',
        'shipIndividually' => 'boolean',
        'costCategory' => 'RecordRef',
        'pricesIncludeTax' => 'boolean',
        'purchasePriceVarianceAcct' => 'RecordRef',
        'quantityPricingSchedule' => 'RecordRef',
        'reorderPointUnits' => 'string',
        'useMarginalRates' => 'boolean',
        'preferredStockLevelUnits' => 'string',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'transferPrice' => 'float',
        'overallQuantityPricingType' => 'ItemOverallQuantityPricingType',
        'pricingGroup' => 'RecordRef',
        'vsoePrice' => 'float',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'costEstimateUnits' => 'string',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'itemRevenueCategory' => 'RecordRef',
        'preferredLocation' => 'RecordRef',
        'isStorePickupAllowed' => 'boolean',
        'reorderMultiple' => 'integer',
        'cost' => 'float',
        'lastInvtCountDate' => 'dateTime',
        'nextInvtCountDate' => 'dateTime',
        'invtCountInterval' => 'integer',
        'invtClassification' => 'ItemInvtClassification',
        'costUnits' => 'string',
        'totalValue' => 'float',
        'averageCost' => 'float',
        'useBins' => 'boolean',
        'quantityReorderUnits' => 'string',
        'leadTime' => 'integer',
        'autoLeadTime' => 'boolean',
        'lastPurchasePrice' => 'float',
        'autoPreferredStockLevel' => 'boolean',
        'preferredStockLevelDays' => 'float',
        'safetyStockLevel' => 'float',
        'safetyStockLevelDays' => 'integer',
        'backwardConsumptionDays' => 'integer',
        'seasonalDemand' => 'boolean',
        'safetyStockLevelUnits' => 'string',
        'demandModifier' => 'float',
        'distributionNetwork' => 'RecordRef',
        'distributionCategory' => 'RecordRef',
        'autoReorderPoint' => 'boolean',
        'storeDisplayName' => 'string',
        'storeDisplayThumbnail' => 'RecordRef',
        'storeDisplayImage' => 'RecordRef',
        'storeDescription' => 'string',
        'storeDetailedDescription' => 'string',
        'storeItemTemplate' => 'RecordRef',
        'pageTitle' => 'string',
        'metaTagHtml' => 'string',
        'excludeFromSitemap' => 'boolean',
        'sitemapPriority' => 'SitemapPriority',
        'searchKeywords' => 'string',
        'isDonationItem' => 'boolean',
        'showDefaultDonationAmount' => 'boolean',
        'maxDonationAmount' => 'float',
        'dontShowPrice' => 'boolean',
        'noPriceMessage' => 'string',
        'outOfStockMessage' => 'string',
        'onSpecial' => 'boolean',
        'outOfStockBehavior' => 'ItemOutOfStockBehavior',
        'relatedItemsDescription' => 'string',
        'specialsDescription' => 'string',
        'featuredDescription' => 'string',
        'shoppingDotComCategory' => 'string',
        'shopzillaCategoryId' => 'integer',
        'nexTagCategory' => 'string',
        'urlComponent' => 'string',
        'customForm' => 'RecordRef',
        'itemId' => 'string',
        'upcCode' => 'string',
        'displayName' => 'string',
        'vendorName' => 'string',
        'parent' => 'RecordRef',
        'isOnline' => 'boolean',
        'isHazmatItem' => 'boolean',
        'hazmatId' => 'string',
        'hazmatShippingName' => 'string',
        'hazmatHazardClass' => 'string',
        'hazmatPackingGroup' => 'HazmatPackingGroup',
        'hazmatItemUnits' => 'string',
        'hazmatItemUnitsQty' => 'float',
        'isGcoCompliant' => 'boolean',
        'offerSupport' => 'boolean',
        'isInactive' => 'boolean',
        'availableToPartners' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'costingMethod' => 'ItemCostingMethod',
        'currency' => 'string',
        'preferredStockLevel' => 'float',
        'pricingMatrix' => 'PricingMatrix',
        'hierarchyVersionsList' => 'InventoryItemHierarchyVersionsList',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'purchaseTaxCode' => 'RecordRef',
        'defaultReturnCost' => 'float',
        'supplyReplenishmentMethod' => 'RecordRef',
        'alternateDemandSourceItem' => 'RecordRef',
        'fixedLotSize' => 'float',
        'periodicLotSizeType' => 'PeriodicLotSizeType',
        'supplyType' => 'RecordRef',
        'demandTimeFence' => 'integer',
        'supplyTimeFence' => 'integer',
        'rescheduleInDays' => 'integer',
        'rescheduleOutDays' => 'integer',
        'periodicLotSizeDays' => 'integer',
        'supplyLotSizingMethod' => 'RecordRef',
        'forwardConsumptionDays' => 'integer',
        'demandSource' => 'RecordRef',
        'quantityBackOrdered' => 'float',
        'quantityCommitted' => 'float',
        'quantityAvailable' => 'float',
        'quantityOnHand' => 'float',
        'onHandValueMli' => 'float',
        'quantityOnOrder' => 'float',
        'rate' => 'float',
        'reorderPoint' => 'float',
        'quantityCommittedUnits' => 'string',
        'salesTaxCode' => 'RecordRef',
        'quantityAvailableUnits' => 'string',
        'quantityOnHandUnits' => 'string',
        'vendor' => 'RecordRef',
        'quantityOnOrderUnits' => 'string',
        'productFeedList' => 'ProductFeedList',
        'subsidiaryList' => 'RecordRefList',
        'itemOptionsList' => 'ItemOptionsList',
        'itemVendorList' => 'ItemVendorList',
        'siteCategoryList' => 'SiteCategoryList',
        'translationsList' => 'TranslationList',
        'binNumberList' => 'InventoryItemBinNumberList',
        'locationsList' => 'InventoryItemLocationsList',
        'matrixOptionList' => 'MatrixOptionList',
        'presentationItemList' => 'PresentationItemList',
        'futureHorizon' => 'integer',
        'consumptionUnit' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
