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
 * LotNumberedAssemblyItem.
 */
class LotNumberedAssemblyItem extends Record
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
    public $printItems;
    /**
     * @var bool
     */
    public $isOnline;
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
    public $useComponentYield;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $availableToPartners;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $costCategory;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $cogsAccount;
    /**
     * @var RecordRef
     */
    public $vendor;
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
     * @var RecordRef
     */
    public $salesTaxCode;
    /**
     * @var RecordRef
     */
    public $purchaseTaxCode;
    /**
     * @var RecordRef
     */
    public $prodQtyVarianceAcct;
    /**
     * @var RecordRef
     */
    public $prodPriceVarianceAcct;
    /**
     * @var RecordRef
     */
    public $purchasePriceVarianceAcct;
    /**
     * @var RecordRef
     */
    public $wipVarianceAcct;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var RecordRef
     */
    public $scrapAcct;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var RecordRef
     */
    public $wipAcct;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var ItemWeightUnit
     */
    public $weightUnit;
    /**
     * @var ItemCostingMethod
     */
    public $costingMethod;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var string
     */
    public $costingMethodDisplay;
    /**
     * @var float
     */
    public $rate;
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
     * @var bool
     */
    public $trackLandedCost;
    /**
     * @var string
     */
    public $matrixItemNameTemplate;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var RecordRef
     */
    public $deferredRevenueAccount;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $stockDescription;
    /**
     * @var bool
     */
    public $producer;
    /**
     * @var string
     */
    public $manufacturer;
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
    public $manufactureraddr1;
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
     * @var AssemblyItemEffectiveBomControl
     */
    public $effectiveBomControl;
    /**
     * @var string
     */
    public $manufacturerTaxId;
    /**
     * @var string
     */
    public $defaultRevision;
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
     * @var bool
     */
    public $isDropShipItem;
    /**
     * @var bool
     */
    public $isPhantom;
    /**
     * @var RecordRefList
     */
    public $itemShipMethodList;
    /**
     * @var string
     */
    public $scheduleBNumber;
    /**
     * @var int
     */
    public $scheduleBQuantity;
    /**
     * @var RecordRef
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
     * @var RecordRef
     */
    public $issueProduct;
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
    public $softDescriptor;
    /**
     * @var bool
     */
    public $isSpecialWorkOrderItem;
    /**
     * @var bool
     */
    public $pricesIncludeTax;
    /**
     * @var RecordRef
     */
    public $quantityPricingSchedule;
    /**
     * @var bool
     */
    public $buildEntireAssembly;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var bool
     */
    public $useMarginalRates;
    /**
     * @var int
     */
    public $reorderMultiple;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
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
    public $intercoCogsAccount;
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
     * @var RecordRef
     */
    public $unbuildVarianceAccount;
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
     * @var RecordRef
     */
    public $dropshipExpenseAccount;
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
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var string
     */
    public $purchaseDescription;
    /**
     * @var int
     */
    public $leadTime;
    /**
     * @var bool
     */
    public $autoLeadTime;
    /**
     * @var int
     */
    public $buildTime;
    /**
     * @var float
     */
    public $safetyStockLevel;
    /**
     * @var int
     */
    public $safetyStockLevelDays;
    /**
     * @var bool
     */
    public $seasonalDemand;
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
    public $demandModifier;
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
     * @var bool
     */
    public $shipIndividually;
    /**
     * @var RecordRef
     */
    public $shipPackage;
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
     * @var RecordRef
     */
    public $supplyLotSizingMethod;
    /**
     * @var RecordRef
     */
    public $demandSource;
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
     * @var float
     */
    public $quantityOnOrder;
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
    public $urlComponent;
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
     * @var string
     */
    public $shoppingDotComCategory;
    /**
     * @var ItemOutOfStockBehavior
     */
    public $outOfStockBehavior;
    /**
     * @var int
     */
    public $shopzillaCategoryId;
    /**
     * @var string
     */
    public $nexTagCategory;
    /**
     * @var ProductFeedList
     */
    public $productFeedList;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var bool
     */
    public $onSpecial;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var RecordRefList
     */
    public $itemNumberOptionsList;
    /**
     * @var ItemVendorList
     */
    public $itemVendorList;
    /**
     * @var PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var LotNumberedAssemblyItemBillOfMaterialsList
     */
    public $billOfMaterialsList;
    /**
     * @var ItemMemberList
     */
    public $memberList;
    /**
     * @var ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var LotNumberedInventoryItemLocationsList
     */
    public $locationsList;
    /**
     * @var SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var InventoryItemBinNumberList
     */
    public $binNumberList;
    /**
     * @var LotNumberedInventoryItemNumbersList
     */
    public $numbersList;
    /**
     * @var TranslationList
     */
    public $translationsList;
    /**
     * @var PresentationItemList
     */
    public $presentationItemList;
    /**
     * @var LotNumberedAssemblyItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
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
        'vendorName' => 'string',
        'parent' => 'RecordRef',
        'printItems' => 'boolean',
        'isOnline' => 'boolean',
        'isGcoCompliant' => 'boolean',
        'offerSupport' => 'boolean',
        'useComponentYield' => 'boolean',
        'isInactive' => 'boolean',
        'availableToPartners' => 'boolean',
        'subsidiaryList' => 'RecordRefList',
        'department' => 'RecordRef',
        'includeChildren' => 'boolean',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'costCategory' => 'RecordRef',
        'description' => 'string',
        'cogsAccount' => 'RecordRef',
        'vendor' => 'RecordRef',
        'incomeAccount' => 'RecordRef',
        'intercoIncomeAccount' => 'RecordRef',
        'assetAccount' => 'RecordRef',
        'matchBillToReceipt' => 'boolean',
        'billQtyVarianceAcct' => 'RecordRef',
        'billPriceVarianceAcct' => 'RecordRef',
        'billExchRateVarianceAcct' => 'RecordRef',
        'gainLossAccount' => 'RecordRef',
        'salesTaxCode' => 'RecordRef',
        'purchaseTaxCode' => 'RecordRef',
        'prodQtyVarianceAcct' => 'RecordRef',
        'prodPriceVarianceAcct' => 'RecordRef',
        'purchasePriceVarianceAcct' => 'RecordRef',
        'wipVarianceAcct' => 'RecordRef',
        'taxSchedule' => 'RecordRef',
        'scrapAcct' => 'RecordRef',
        'shippingCost' => 'float',
        'wipAcct' => 'RecordRef',
        'handlingCost' => 'float',
        'weight' => 'float',
        'weightUnit' => 'ItemWeightUnit',
        'costingMethod' => 'ItemCostingMethod',
        'isTaxable' => 'boolean',
        'costingMethodDisplay' => 'string',
        'rate' => 'float',
        'unitsType' => 'RecordRef',
        'stockUnit' => 'RecordRef',
        'purchaseUnit' => 'RecordRef',
        'saleUnit' => 'RecordRef',
        'trackLandedCost' => 'boolean',
        'matrixItemNameTemplate' => 'string',
        'billingSchedule' => 'RecordRef',
        'deferredRevenueAccount' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'stockDescription' => 'string',
        'producer' => 'boolean',
        'manufacturer' => 'string',
        'mpn' => 'string',
        'multManufactureAddr' => 'boolean',
        'manufactureraddr1' => 'string',
        'manufacturerCity' => 'string',
        'manufacturerState' => 'string',
        'manufacturerZip' => 'string',
        'countryOfManufacture' => 'Country',
        'effectiveBomControl' => 'AssemblyItemEffectiveBomControl',
        'manufacturerTaxId' => 'string',
        'defaultRevision' => 'string',
        'defaultItemShipMethod' => 'RecordRef',
        'itemCarrier' => 'ShippingCarrier',
        'roundUpAsComponent' => 'boolean',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'isDropShipItem' => 'boolean',
        'isPhantom' => 'boolean',
        'itemShipMethodList' => 'RecordRefList',
        'scheduleBNumber' => 'string',
        'scheduleBQuantity' => 'integer',
        'scheduleBCode' => 'RecordRef',
        'manufacturerTariff' => 'string',
        'preferenceCriterion' => 'ItemPreferenceCriterion',
        'issueProduct' => 'RecordRef',
        'minimumQuantity' => 'integer',
        'enforceMinQtyInternally' => 'boolean',
        'maximumQuantity' => 'integer',
        'softDescriptor' => 'RecordRef',
        'isSpecialWorkOrderItem' => 'boolean',
        'pricesIncludeTax' => 'boolean',
        'quantityPricingSchedule' => 'RecordRef',
        'buildEntireAssembly' => 'boolean',
        'quantityOnHand' => 'float',
        'useMarginalRates' => 'boolean',
        'reorderMultiple' => 'integer',
        'cost' => 'float',
        'costEstimateType' => 'ItemCostEstimateType',
        'isHazmatItem' => 'boolean',
        'hazmatId' => 'string',
        'hazmatShippingName' => 'string',
        'hazmatHazardClass' => 'string',
        'hazmatPackingGroup' => 'HazmatPackingGroup',
        'hazmatItemUnits' => 'string',
        'hazmatItemUnitsQty' => 'float',
        'costEstimate' => 'float',
        'transferPrice' => 'float',
        'overallQuantityPricingType' => 'ItemOverallQuantityPricingType',
        'pricingGroup' => 'RecordRef',
        'intercoCogsAccount' => 'RecordRef',
        'vsoePrice' => 'float',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'itemRevenueCategory' => 'RecordRef',
        'unbuildVarianceAccount' => 'RecordRef',
        'revenueRecognitionRule' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'revenueAllocationGroup' => 'RecordRef',
        'createRevenuePlansOn' => 'RecordRef',
        'directRevenuePosting' => 'boolean',
        'dropshipExpenseAccount' => 'RecordRef',
        'preferredLocation' => 'RecordRef',
        'isStorePickupAllowed' => 'boolean',
        'totalValue' => 'float',
        'useBins' => 'boolean',
        'averageCost' => 'float',
        'lastPurchasePrice' => 'float',
        'purchaseDescription' => 'string',
        'leadTime' => 'integer',
        'autoLeadTime' => 'boolean',
        'buildTime' => 'integer',
        'safetyStockLevel' => 'float',
        'safetyStockLevelDays' => 'integer',
        'seasonalDemand' => 'boolean',
        'serialNumbers' => 'string',
        'reorderPoint' => 'float',
        'preferredStockLevel' => 'float',
        'expirationDate' => 'dateTime',
        'lastInvtCountDate' => 'dateTime',
        'nextInvtCountDate' => 'dateTime',
        'invtCountInterval' => 'integer',
        'invtClassification' => 'ItemInvtClassification',
        'demandModifier' => 'float',
        'autoReorderPoint' => 'boolean',
        'autoPreferredStockLevel' => 'boolean',
        'preferredStockLevelDays' => 'float',
        'shipIndividually' => 'boolean',
        'shipPackage' => 'RecordRef',
        'defaultReturnCost' => 'float',
        'supplyReplenishmentMethod' => 'RecordRef',
        'alternateDemandSourceItem' => 'RecordRef',
        'fixedLotSize' => 'float',
        'supplyType' => 'RecordRef',
        'demandTimeFence' => 'integer',
        'supplyTimeFence' => 'integer',
        'rescheduleInDays' => 'integer',
        'rescheduleOutDays' => 'integer',
        'supplyLotSizingMethod' => 'RecordRef',
        'demandSource' => 'RecordRef',
        'quantityCommitted' => 'float',
        'quantityAvailable' => 'float',
        'quantityBackOrdered' => 'float',
        'quantityOnOrder' => 'float',
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
        'urlComponent' => 'string',
        'searchKeywords' => 'string',
        'isDonationItem' => 'boolean',
        'showDefaultDonationAmount' => 'boolean',
        'maxDonationAmount' => 'float',
        'dontShowPrice' => 'boolean',
        'noPriceMessage' => 'string',
        'outOfStockMessage' => 'string',
        'shoppingDotComCategory' => 'string',
        'outOfStockBehavior' => 'ItemOutOfStockBehavior',
        'shopzillaCategoryId' => 'integer',
        'nexTagCategory' => 'string',
        'productFeedList' => 'ProductFeedList',
        'relatedItemsDescription' => 'string',
        'onSpecial' => 'boolean',
        'specialsDescription' => 'string',
        'featuredDescription' => 'string',
        'itemOptionsList' => 'ItemOptionsList',
        'itemNumberOptionsList' => 'RecordRefList',
        'itemVendorList' => 'ItemVendorList',
        'pricingMatrix' => 'PricingMatrix',
        'billOfMaterialsList' => 'LotNumberedAssemblyItemBillOfMaterialsList',
        'memberList' => 'ItemMemberList',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'locationsList' => 'LotNumberedInventoryItemLocationsList',
        'siteCategoryList' => 'SiteCategoryList',
        'binNumberList' => 'InventoryItemBinNumberList',
        'numbersList' => 'LotNumberedInventoryItemNumbersList',
        'translationsList' => 'TranslationList',
        'presentationItemList' => 'PresentationItemList',
        'hierarchyVersionsList' => 'LotNumberedAssemblyItemHierarchyVersionsList',
        'futureHorizon' => 'integer',
        'consumptionUnit' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
