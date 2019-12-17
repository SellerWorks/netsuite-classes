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
 * LotNumberedInventoryItem.
 */
class LotNumberedInventoryItem extends Record
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
     * @var ItemMatrixType
     */
    public $matrixType;
    /**
     * @var bool
     */
    public $includeChildren;
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
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var string
     */
    public $purchaseDescription;
    /**
     * @var bool
     */
    public $copyDescription;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $cogsAccount;
    /**
     * @var RecordRef
     */
    public $intercoCogsAccount;
    /**
     * @var RecordRef
     */
    public $vendor;
    /**
     * @var string
     */
    public $salesDescription;
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
    public $issueProduct;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var RecordRef
     */
    public $dropshipExpenseAccount;
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
    public $isTaxable;
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
     * @var float
     */
    public $handlingCost;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var string
     */
    public $costingMethodDisplay;
    /**
     * @var string
     */
    public $shippingCostUnits;
    /**
     * @var string
     */
    public $handlingCostUnits;
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
     * @var string
     */
    public $minimumQuantityUnits;
    /**
     * @var string
     */
    public $safetyStockLevelUnits;
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
     * @var RecordRef
     */
    public $defaultItemShipMethod;
    /**
     * @var ShippingCarrier
     */
    public $itemCarrier;
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
    public $softDescriptor;
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
     * @var bool
     */
    public $useMarginalRates;
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
     * @var RecordRef
     */
    public $preferredLocation;
    /**
     * @var bool
     */
    public $isStorePickupAllowed;
    /**
     * @var float
     */
    public $vsoePrice;
    /**
     * @var VsoeSopGroup
     */
    public $vsoeSopGroup;
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
     * @var float
     */
    public $cost;
    /**
     * @var string
     */
    public $costUnits;
    /**
     * @var int
     */
    public $reorderMultiple;
    /**
     * @var string
     */
    public $quantityReorderUnits;
    /**
     * @var float
     */
    public $totalValue;
    /**
     * @var bool
     */
    public $useBins;
    /**
     * @var float
     */
    public $averageCost;
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
    public $autoReorderPoint;
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
     * @var float
     */
    public $demandModifier;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var RecordRef
     */
    public $storeDisplayThumbnail;
    /**
     * @var ItemWeightUnit
     */
    public $weightUnit;
    /**
     * @var string
     */
    public $weightUnits;
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
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var string
     */
    public $quantityOnHandUnits;
    /**
     * @var dateTime
     */
    public $expirationDate;
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
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var string
     */
    public $reorderPointUnits;
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
    public $quantityOnOrder;
    /**
     * @var string
     */
    public $preferredStockLevelUnits;
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
    public $purchaseTaxCode;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var RecordRef
     */
    public $salesTaxCode;
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
    public $specialsDescription;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var ProductFeedList
     */
    public $productFeedList;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var MatrixOptionList
     */
    public $matrixOptionList;
    /**
     * @var ItemVendorList
     */
    public $itemVendorList;
    /**
     * @var PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var LotNumberedInventoryItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
    /**
     * @var ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var RecordRefList
     */
    public $itemNumberOptionsList;
    /**
     * @var LotNumberedInventoryItemNumbersList
     */
    public $numbersList;
    /**
     * @var InventoryItemBinNumberList
     */
    public $binNumberList;
    /**
     * @var SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var LotNumberedInventoryItemLocationsList
     */
    public $locationsList;
    /**
     * @var TranslationList
     */
    public $translationsList;
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
        'customForm' => 'RecordRef',
        'itemId' => 'string',
        'upcCode' => 'string',
        'displayName' => 'string',
        'matrixType' => 'ItemMatrixType',
        'includeChildren' => 'boolean',
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
        'subsidiaryList' => 'RecordRefList',
        'purchaseDescription' => 'string',
        'copyDescription' => 'boolean',
        'currency' => 'string',
        'cogsAccount' => 'RecordRef',
        'intercoCogsAccount' => 'RecordRef',
        'vendor' => 'RecordRef',
        'salesDescription' => 'string',
        'incomeAccount' => 'RecordRef',
        'intercoIncomeAccount' => 'RecordRef',
        'issueProduct' => 'RecordRef',
        'taxSchedule' => 'RecordRef',
        'dropshipExpenseAccount' => 'RecordRef',
        'revenueRecognitionRule' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'revenueAllocationGroup' => 'RecordRef',
        'createRevenuePlansOn' => 'RecordRef',
        'directRevenuePosting' => 'boolean',
        'isTaxable' => 'boolean',
        'assetAccount' => 'RecordRef',
        'matchBillToReceipt' => 'boolean',
        'billQtyVarianceAcct' => 'RecordRef',
        'billPriceVarianceAcct' => 'RecordRef',
        'billExchRateVarianceAcct' => 'RecordRef',
        'gainLossAccount' => 'RecordRef',
        'shippingCost' => 'float',
        'handlingCost' => 'float',
        'weight' => 'float',
        'costingMethodDisplay' => 'string',
        'shippingCostUnits' => 'string',
        'handlingCostUnits' => 'string',
        'unitsType' => 'RecordRef',
        'stockUnit' => 'RecordRef',
        'purchaseUnit' => 'RecordRef',
        'saleUnit' => 'RecordRef',
        'minimumQuantityUnits' => 'string',
        'safetyStockLevelUnits' => 'string',
        'billingSchedule' => 'RecordRef',
        'trackLandedCost' => 'boolean',
        'matrixItemNameTemplate' => 'string',
        'isDropShipItem' => 'boolean',
        'isSpecialOrderItem' => 'boolean',
        'stockDescription' => 'string',
        'deferredRevenueAccount' => 'RecordRef',
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
        'defaultItemShipMethod' => 'RecordRef',
        'itemCarrier' => 'ShippingCarrier',
        'roundUpAsComponent' => 'boolean',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
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
        'shipPackage' => 'RecordRef',
        'shipIndividually' => 'boolean',
        'softDescriptor' => 'RecordRef',
        'costCategory' => 'RecordRef',
        'pricesIncludeTax' => 'boolean',
        'purchasePriceVarianceAcct' => 'RecordRef',
        'quantityPricingSchedule' => 'RecordRef',
        'useMarginalRates' => 'boolean',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'transferPrice' => 'float',
        'overallQuantityPricingType' => 'ItemOverallQuantityPricingType',
        'pricingGroup' => 'RecordRef',
        'preferredLocation' => 'RecordRef',
        'isStorePickupAllowed' => 'boolean',
        'vsoePrice' => 'float',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'itemRevenueCategory' => 'RecordRef',
        'cost' => 'float',
        'costUnits' => 'string',
        'reorderMultiple' => 'integer',
        'quantityReorderUnits' => 'string',
        'totalValue' => 'float',
        'useBins' => 'boolean',
        'averageCost' => 'float',
        'leadTime' => 'integer',
        'autoLeadTime' => 'boolean',
        'lastPurchasePrice' => 'float',
        'autoReorderPoint' => 'boolean',
        'autoPreferredStockLevel' => 'boolean',
        'preferredStockLevelDays' => 'float',
        'safetyStockLevel' => 'float',
        'safetyStockLevelDays' => 'integer',
        'backwardConsumptionDays' => 'integer',
        'seasonalDemand' => 'boolean',
        'demandModifier' => 'float',
        'storeDisplayName' => 'string',
        'storeDisplayThumbnail' => 'RecordRef',
        'weightUnit' => 'ItemWeightUnit',
        'weightUnits' => 'string',
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
        'shoppingDotComCategory' => 'string',
        'shopzillaCategoryId' => 'integer',
        'nexTagCategory' => 'string',
        'quantityOnHand' => 'float',
        'quantityOnHandUnits' => 'string',
        'expirationDate' => 'dateTime',
        'lastInvtCountDate' => 'dateTime',
        'nextInvtCountDate' => 'dateTime',
        'invtCountInterval' => 'integer',
        'invtClassification' => 'ItemInvtClassification',
        'onHandValueMli' => 'float',
        'serialNumbers' => 'string',
        'reorderPoint' => 'float',
        'preferredStockLevel' => 'float',
        'reorderPointUnits' => 'string',
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
        'quantityOnOrder' => 'float',
        'preferredStockLevelUnits' => 'string',
        'quantityCommitted' => 'float',
        'quantityAvailable' => 'float',
        'quantityBackOrdered' => 'float',
        'purchaseTaxCode' => 'RecordRef',
        'rate' => 'float',
        'salesTaxCode' => 'RecordRef',
        'dontShowPrice' => 'boolean',
        'noPriceMessage' => 'string',
        'outOfStockMessage' => 'string',
        'onSpecial' => 'boolean',
        'outOfStockBehavior' => 'ItemOutOfStockBehavior',
        'specialsDescription' => 'string',
        'relatedItemsDescription' => 'string',
        'featuredDescription' => 'string',
        'productFeedList' => 'ProductFeedList',
        'urlComponent' => 'string',
        'itemOptionsList' => 'ItemOptionsList',
        'matrixOptionList' => 'MatrixOptionList',
        'itemVendorList' => 'ItemVendorList',
        'pricingMatrix' => 'PricingMatrix',
        'hierarchyVersionsList' => 'LotNumberedInventoryItemHierarchyVersionsList',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'itemNumberOptionsList' => 'RecordRefList',
        'numbersList' => 'LotNumberedInventoryItemNumbersList',
        'binNumberList' => 'InventoryItemBinNumberList',
        'siteCategoryList' => 'SiteCategoryList',
        'locationsList' => 'LotNumberedInventoryItemLocationsList',
        'translationsList' => 'TranslationList',
        'presentationItemList' => 'PresentationItemList',
        'futureHorizon' => 'integer',
        'consumptionUnit' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
