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
 * NonInventorySaleItem.
 */
class NonInventorySaleItem extends Record
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
    public $salesDescription;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $incomeAccount;
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
    public $taxSchedule;
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
    public $costEstimateUnits;
    /**
     * @var RecordRef
     */
    public $unitsType;
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
     * @var bool
     */
    public $isFulfillable;
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
    public $quantityPricingSchedule;
    /**
     * @var bool
     */
    public $useMarginalRates;
    /**
     * @var ItemOverallQuantityPricingType
     */
    public $overallQuantityPricingType;
    /**
     * @var RecordRef
     */
    public $pricingGroup;
    /**
     * @var string
     */
    public $minimumQuantityUnits;
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
     * @var ProductFeedList
     */
    public $productFeedList;
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
     * @var string
     */
    public $matrixItemNameTemplate;
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
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var MatrixOptionList
     */
    public $matrixOptionList;
    /**
     * @var PricingMatrix
     */
    public $pricingMatrix;
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
    public $rate;
    /**
     * @var RecordRef
     */
    public $salesTaxCode;
    /**
     * @var SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var TranslationList
     */
    public $translationsList;
    /**
     * @var PresentationItemList
     */
    public $presentationItemList;
    /**
     * @var NonInventorySaleItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
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
        'salesDescription' => 'string',
        'includeChildren' => 'boolean',
        'incomeAccount' => 'RecordRef',
        'isTaxable' => 'boolean',
        'matrixType' => 'ItemMatrixType',
        'taxSchedule' => 'RecordRef',
        'shippingCost' => 'float',
        'shippingCostUnits' => 'string',
        'handlingCost' => 'float',
        'handlingCostUnits' => 'string',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'weight' => 'float',
        'weightUnit' => 'ItemWeightUnit',
        'weightUnits' => 'string',
        'costEstimateUnits' => 'string',
        'unitsType' => 'RecordRef',
        'saleUnit' => 'RecordRef',
        'issueProduct' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'deferredRevenueAccount' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'stockDescription' => 'string',
        'isHazmatItem' => 'boolean',
        'hazmatId' => 'string',
        'hazmatShippingName' => 'string',
        'hazmatHazardClass' => 'string',
        'hazmatPackingGroup' => 'HazmatPackingGroup',
        'hazmatItemUnits' => 'string',
        'hazmatItemUnitsQty' => 'float',
        'producer' => 'boolean',
        'manufacturer' => 'string',
        'mpn' => 'string',
        'multManufactureAddr' => 'boolean',
        'manufacturerAddr1' => 'string',
        'manufacturerCity' => 'string',
        'manufacturerState' => 'string',
        'manufacturerZip' => 'string',
        'countryOfManufacture' => 'Country',
        'manufacturerTaxId' => 'string',
        'scheduleBNumber' => 'string',
        'scheduleBQuantity' => 'integer',
        'scheduleBCode' => 'ScheduleBCode',
        'manufacturerTariff' => 'string',
        'preferenceCriterion' => 'ItemPreferenceCriterion',
        'minimumQuantity' => 'integer',
        'enforceMinQtyInternally' => 'boolean',
        'maximumQuantity' => 'integer',
        'softDescriptor' => 'string',
        'shipPackage' => 'RecordRef',
        'shipIndividually' => 'boolean',
        'isFulfillable' => 'boolean',
        'costCategory' => 'RecordRef',
        'pricesIncludeTax' => 'boolean',
        'quantityPricingSchedule' => 'RecordRef',
        'useMarginalRates' => 'boolean',
        'overallQuantityPricingType' => 'ItemOverallQuantityPricingType',
        'pricingGroup' => 'RecordRef',
        'minimumQuantityUnits' => 'string',
        'vsoePrice' => 'float',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'itemRevenueCategory' => 'RecordRef',
        'deferRevRec' => 'boolean',
        'revenueRecognitionRule' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'revenueAllocationGroup' => 'RecordRef',
        'createRevenuePlansOn' => 'RecordRef',
        'directRevenuePosting' => 'boolean',
        'contingentRevenueHandling' => 'boolean',
        'revReclassFXAccount' => 'RecordRef',
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
        'productFeedList' => 'ProductFeedList',
        'urlComponent' => 'string',
        'customForm' => 'RecordRef',
        'itemId' => 'string',
        'upcCode' => 'string',
        'displayName' => 'string',
        'parent' => 'RecordRef',
        'isOnline' => 'boolean',
        'isGcoCompliant' => 'boolean',
        'offerSupport' => 'boolean',
        'isInactive' => 'boolean',
        'matrixItemNameTemplate' => 'string',
        'availableToPartners' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'defaultItemShipMethod' => 'RecordRef',
        'itemCarrier' => 'ShippingCarrier',
        'itemShipMethodList' => 'RecordRefList',
        'subsidiaryList' => 'RecordRefList',
        'itemOptionsList' => 'ItemOptionsList',
        'matrixOptionList' => 'MatrixOptionList',
        'pricingMatrix' => 'PricingMatrix',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'purchaseTaxCode' => 'RecordRef',
        'rate' => 'float',
        'salesTaxCode' => 'RecordRef',
        'siteCategoryList' => 'SiteCategoryList',
        'translationsList' => 'TranslationList',
        'presentationItemList' => 'PresentationItemList',
        'hierarchyVersionsList' => 'NonInventorySaleItemHierarchyVersionsList',
        'consumptionUnit' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
