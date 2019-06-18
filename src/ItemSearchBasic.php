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
 * ItemSearchBasic.
 */
class ItemSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $accBookRevRecForecastRule;
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBookAmortization;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBookCreatePlansOn;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBookRevRecRule;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBookRevRecSchedule;
    /**
     * @var SearchMultiSelectField
     */
    public $allowedShippingMethod;
    /**
     * @var SearchMultiSelectField
     */
    public $alternateDemandSourceItem;
    /**
     * @var SearchDoubleField
     */
    public $atpLeadTime;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $atpMethod;
    /**
     * @var SearchBooleanField
     */
    public $autoLeadTime;
    /**
     * @var SearchBooleanField
     */
    public $autoPreferredStockLevel;
    /**
     * @var SearchBooleanField
     */
    public $autoReorderPoint;
    /**
     * @var SearchBooleanField
     */
    public $availableToPartners;
    /**
     * @var SearchDoubleField
     */
    public $averageCost;
    /**
     * @var SearchLongField
     */
    public $backwardConsumptionDays;
    /**
     * @var SearchStringField
     */
    public $binNumber;
    /**
     * @var SearchDoubleField
     */
    public $binOnHandAvail;
    /**
     * @var SearchDoubleField
     */
    public $binOnHandCount;
    /**
     * @var SearchDoubleField
     */
    public $bomQuantity;
    /**
     * @var SearchBooleanField
     */
    public $buildEntireAssembly;
    /**
     * @var SearchDoubleField
     */
    public $buildTime;
    /**
     * @var SearchDoubleField
     */
    public $buyItNowPrice;
    /**
     * @var SearchStringField
     */
    public $caption;
    /**
     * @var SearchMultiSelectField
     */
    public $category;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchMultiSelectField
     */
    public $component;
    /**
     * @var SearchMultiSelectField
     */
    public $componentOf;
    /**
     * @var SearchDoubleField
     */
    public $componentYield;
    /**
     * @var SearchBooleanField
     */
    public $contingentRevenueHandling;
    /**
     * @var SearchBooleanField
     */
    public $copyDescription;
    /**
     * @var SearchMultiSelectField
     */
    public $correlatedItem;
    /**
     * @var SearchDoubleField
     */
    public $correlatedItemCorrelation;
    /**
     * @var SearchLongField
     */
    public $correlatedItemCount;
    /**
     * @var SearchDoubleField
     */
    public $correlatedItemLift;
    /**
     * @var SearchDoubleField
     */
    public $correlatedItemPurchaseRate;
    /**
     * @var SearchDoubleField
     */
    public $cost;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $costAccountingStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $costCategory;
    /**
     * @var SearchDoubleField
     */
    public $costEstimate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $costEstimateType;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $costingMethod;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $countryOfManufacture;
    /**
     * @var SearchDateField
     */
    public $created;
    /**
     * @var SearchBooleanField
     */
    public $createJob;
    /**
     * @var SearchMultiSelectField
     */
    public $createRevenuePlansOn;
    /**
     * @var SearchDateField
     */
    public $dateViewed;
    /**
     * @var SearchDoubleField
     */
    public $daysBeforeExpiration;
    /**
     * @var SearchDoubleField
     */
    public $defaultReturnCost;
    /**
     * @var SearchMultiSelectField
     */
    public $defaultShippingMethod;
    /**
     * @var SearchBooleanField
     */
    public $deferRevRec;
    /**
     * @var SearchDoubleField
     */
    public $demandModifier;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $demandSource;
    /**
     * @var SearchLongField
     */
    public $demandTimeFence;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchBooleanField
     */
    public $directRevenuePosting;
    /**
     * @var SearchBooleanField
     */
    public $displayIneBayStore;
    /**
     * @var SearchStringField
     */
    public $displayName;
    /**
     * @var SearchMultiSelectField
     */
    public $distributionCategory;
    /**
     * @var SearchMultiSelectField
     */
    public $distributionNetwork;
    /**
     * @var SearchBooleanField
     */
    public $dontShowPrice;
    /**
     * @var SearchStringField
     */
    public $eBayItemDescription;
    /**
     * @var SearchStringField
     */
    public $eBayItemSubtitle;
    /**
     * @var SearchStringField
     */
    public $eBayItemTitle;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $ebayRelistingOption;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $effectiveBomControl;
    /**
     * @var SearchDateField
     */
    public $effectiveDate;
    /**
     * @var SearchMultiSelectField
     */
    public $effectiveRevision;
    /**
     * @var SearchBooleanField
     */
    public $endAuctionsWhenOutOfStock;
    /**
     * @var SearchBooleanField
     */
    public $excludeFromSitemap;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchStringField
     */
    public $featuredDescription;
    /**
     * @var SearchStringField
     */
    public $feedDescription;
    /**
     * @var SearchStringField
     */
    public $feedName;
    /**
     * @var SearchDoubleField
     */
    public $fixedLotSize;
    /**
     * @var SearchLongField
     */
    public $forwardConsumptionDays;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $fraudRisk;
    /**
     * @var SearchBooleanField
     */
    public $froogleProductFeed;
    /**
     * @var SearchDoubleField
     */
    public $fxCost;
    /**
     * @var SearchBooleanField
     */
    public $generateAccruals;
    /**
     * @var SearchStringField
     */
    public $giftCertAuthCode;
    /**
     * @var SearchStringField
     */
    public $giftCertEmail;
    /**
     * @var SearchDateField
     */
    public $giftCertExpDate;
    /**
     * @var SearchStringField
     */
    public $giftCertFrom;
    /**
     * @var SearchStringField
     */
    public $giftCertMsg;
    /**
     * @var SearchStringField
     */
    public $giftCertOrigAmt;
    /**
     * @var SearchStringField
     */
    public $giftCertRecipient;
    /**
     * @var SearchMultiSelectField
     */
    public $hierarchyNode;
    /**
     * @var SearchMultiSelectField
     */
    public $hierarchyVersion;
    /**
     * @var SearchStringField
     */
    public $imageUrl;
    /**
     * @var SearchBooleanField
     */
    public $includeChildren;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $inventoryLocation;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $invtClassification;
    /**
     * @var SearchLongField
     */
    public $invtCountInterval;
    /**
     * @var SearchBooleanField
     */
    public $isAvailable;
    /**
     * @var SearchBooleanField
     */
    public $isDropShipItem;
    /**
     * @var SearchBooleanField
     */
    public $isFulfillable;
    /**
     * @var SearchBooleanField
     */
    public $isGcoCompliant;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isLotItem;
    /**
     * @var SearchBooleanField
     */
    public $isOnline;
    /**
     * @var SearchBooleanField
     */
    public $isPreferredVendor;
    /**
     * @var SearchBooleanField
     */
    public $isSerialItem;
    /**
     * @var SearchBooleanField
     */
    public $isSpecialOrderItem;
    /**
     * @var SearchBooleanField
     */
    public $isSpecialWorkOrderItem;
    /**
     * @var SearchBooleanField
     */
    public $isStorePickupAllowed;
    /**
     * @var SearchMultiSelectField
     */
    public $issueProduct;
    /**
     * @var SearchBooleanField
     */
    public $isTaxable;
    /**
     * @var SearchBooleanField
     */
    public $isVsoeBundle;
    /**
     * @var SearchBooleanField
     */
    public $isWip;
    /**
     * @var SearchStringField
     */
    public $itemId;
    /**
     * @var SearchMultiSelectField
     */
    public $itemRevenueCategory;
    /**
     * @var SearchStringField
     */
    public $itemUrl;
    /**
     * @var SearchDateField
     */
    public $lastInvtCountDate;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchDoubleField
     */
    public $lastPurchasePrice;
    /**
     * @var SearchDateField
     */
    public $lastQuantityAvailableChange;
    /**
     * @var SearchLongField
     */
    public $leadTime;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $listingDuration;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchBooleanField
     */
    public $locationAllowStorePickup;
    /**
     * @var SearchDoubleField
     */
    public $locationAtpLeadTime;
    /**
     * @var SearchDoubleField
     */
    public $locationAverageCost;
    /**
     * @var SearchDoubleField
     */
    public $locationBuildTime;
    /**
     * @var SearchDoubleField
     */
    public $locationCost;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationCostAccountingStatus;
    /**
     * @var SearchDoubleField
     */
    public $locationDefaultReturnCost;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationDemandSource;
    /**
     * @var SearchLongField
     */
    public $locationDemandTimeFence;
    /**
     * @var SearchDoubleField
     */
    public $locationFixedLotSize;
    /**
     * @var SearchMultiSelectField
     */
    public $locationInventoryCostTemplate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationInvtClassification;
    /**
     * @var SearchLongField
     */
    public $locationInvtCountInterval;
    /**
     * @var SearchDateField
     */
    public $locationLastInvtCountDate;
    /**
     * @var SearchLongField
     */
    public $locationLeadTime;
    /**
     * @var SearchDateField
     */
    public $locationNextInvtCountDate;
    /**
     * @var SearchLongField
     */
    public $locationPeriodicLotSizeDays;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationPeriodicLotSizeType;
    /**
     * @var SearchDoubleField
     */
    public $locationPreferredStockLevel;
    /**
     * @var SearchDoubleField
     */
    public $locationQtyAvailForStorePickup;
    /**
     * @var SearchDoubleField
     */
    public $locationQuantityAvailable;
    /**
     * @var SearchDoubleField
     */
    public $locationQuantityBackOrdered;
    /**
     * @var SearchDoubleField
     */
    public $locationQuantityCommitted;
    /**
     * @var SearchDoubleField
     */
    public $locationQuantityInTransit;
    /**
     * @var SearchDoubleField
     */
    public $locationQuantityOnHand;
    /**
     * @var SearchDoubleField
     */
    public $locationQuantityOnOrder;
    /**
     * @var SearchDoubleField
     */
    public $locationReorderPoint;
    /**
     * @var SearchLongField
     */
    public $locationRescheduleInDays;
    /**
     * @var SearchLongField
     */
    public $locationRescheduleOutDays;
    /**
     * @var SearchDoubleField
     */
    public $locationSafetyStockLevel;
    /**
     * @var SearchDoubleField
     */
    public $locationStorePickupBufferStock;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationSupplyLotSizingMethod;
    /**
     * @var SearchLongField
     */
    public $locationSupplyTimeFence;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationSupplyType;
    /**
     * @var SearchDoubleField
     */
    public $locationTotalValue;
    /**
     * @var SearchLongField
     */
    public $locBackwardConsumptionDays;
    /**
     * @var SearchLongField
     */
    public $locForwardConsumptionDays;
    /**
     * @var SearchStringField
     */
    public $manufacturer;
    /**
     * @var SearchStringField
     */
    public $manufactureraddr1;
    /**
     * @var SearchStringField
     */
    public $manufacturerCity;
    /**
     * @var SearchStringField
     */
    public $manufacturerState;
    /**
     * @var SearchStringField
     */
    public $manufacturerTariff;
    /**
     * @var SearchStringField
     */
    public $manufacturerTaxId;
    /**
     * @var SearchStringField
     */
    public $manufacturerZip;
    /**
     * @var SearchBooleanField
     */
    public $manufacturingChargeItem;
    /**
     * @var SearchBooleanField
     */
    public $matchBillToReceipt;
    /**
     * @var SearchBooleanField
     */
    public $matrix;
    /**
     * @var SearchBooleanField
     */
    public $matrixChild;
    /**
     * @var SearchLongField
     */
    public $maximumQuantity;
    /**
     * @var SearchStringField
     */
    public $metaTagHtml;
    /**
     * @var SearchLongField
     */
    public $minimumQuantity;
    /**
     * @var SearchBooleanField
     */
    public $mossApplies;
    /**
     * @var SearchStringField
     */
    public $mpn;
    /**
     * @var SearchBooleanField
     */
    public $multManufactureAddr;
    /**
     * @var SearchStringField
     */
    public $nexTagCategory;
    /**
     * @var SearchBooleanField
     */
    public $nexTagProductFeed;
    /**
     * @var SearchDateField
     */
    public $nextInvtCountDate;
    /**
     * @var SearchLongField
     */
    public $numActiveListings;
    /**
     * @var SearchDoubleField
     */
    public $numberAllowedDownloads;
    /**
     * @var SearchLongField
     */
    public $numCurrentlyListed;
    /**
     * @var SearchDateField
     */
    public $obsoleteDate;
    /**
     * @var SearchMultiSelectField
     */
    public $obsoleteRevision;
    /**
     * @var SearchBooleanField
     */
    public $offerSupport;
    /**
     * @var SearchDoubleField
     */
    public $onlineCustomerPrice;
    /**
     * @var SearchBooleanField
     */
    public $onSpecial;
    /**
     * @var SearchMultiSelectField
     */
    public $otherVendor;
    /**
     * @var SearchMultiSelectField
     */
    public $outOfStockBehavior;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $overallQuantityPricingType;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $overheadType;
    /**
     * @var SearchStringField
     */
    public $pageTitle;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchLongField
     */
    public $periodicLotSizeDays;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $periodicLotSizeType;
    /**
     * @var SearchStringField
     */
    public $preferenceCriterion;
    /**
     * @var SearchBooleanField
     */
    public $preferredBin;
    /**
     * @var SearchMultiSelectField
     */
    public $preferredLocation;
    /**
     * @var SearchDoubleField
     */
    public $preferredStockLevel;
    /**
     * @var SearchLongField
     */
    public $preferredStockLevelDays;
    /**
     * @var SearchDoubleField
     */
    public $price;
    /**
     * @var SearchBooleanField
     */
    public $pricesIncludeTax;
    /**
     * @var SearchMultiSelectField
     */
    public $pricingGroup;
    /**
     * @var SearchLongField
     */
    public $primaryCategory;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderAmount;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderQuantity;
    /**
     * @var SearchDoubleField
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var SearchMultiSelectField
     */
    public $purchaseUnit;
    /**
     * @var SearchDoubleField
     */
    public $quantityAvailable;
    /**
     * @var SearchDoubleField
     */
    public $quantityBackOrdered;
    /**
     * @var SearchDoubleField
     */
    public $quantityCommitted;
    /**
     * @var SearchDoubleField
     */
    public $quantityOnHand;
    /**
     * @var SearchDoubleField
     */
    public $quantityOnOrder;
    /**
     * @var SearchMultiSelectField
     */
    public $quantityPricingSchedule;
    /**
     * @var SearchDoubleField
     */
    public $receiptAmount;
    /**
     * @var SearchDoubleField
     */
    public $receiptQuantity;
    /**
     * @var SearchDoubleField
     */
    public $receiptQuantityDiff;
    /**
     * @var SearchLongField
     */
    public $reorderMultiple;
    /**
     * @var SearchDoubleField
     */
    public $reorderPoint;
    /**
     * @var SearchLongField
     */
    public $rescheduleInDays;
    /**
     * @var SearchLongField
     */
    public $rescheduleOutDays;
    /**
     * @var SearchDoubleField
     */
    public $reservePrice;
    /**
     * @var SearchMultiSelectField
     */
    public $revenueAllocationGroup;
    /**
     * @var SearchMultiSelectField
     */
    public $revenueRecognitionRule;
    /**
     * @var SearchMultiSelectField
     */
    public $revRecForecastRule;
    /**
     * @var SearchMultiSelectField
     */
    public $revRecSchedule;
    /**
     * @var SearchBooleanField
     */
    public $roundUpAsComponent;
    /**
     * @var SearchDoubleField
     */
    public $safetyStockLevel;
    /**
     * @var SearchLongField
     */
    public $safetyStockLevelDays;
    /**
     * @var SearchStringField
     */
    public $salesDescription;
    /**
     * @var SearchMultiSelectField
     */
    public $saleUnit;
    /**
     * @var SearchBooleanField
     */
    public $sameAsPrimaryBookAmortization;
    /**
     * @var SearchBooleanField
     */
    public $sameAsPrimaryBookRevRec;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $scheduleBCode;
    /**
     * @var SearchStringField
     */
    public $scheduleBNumber;
    /**
     * @var SearchStringField
     */
    public $scheduleBQuantity;
    /**
     * @var SearchStringField
     */
    public $searchKeywords;
    /**
     * @var SearchBooleanField
     */
    public $seasonalDemand;
    /**
     * @var SearchBooleanField
     */
    public $sellOnEBay;
    /**
     * @var SearchStringField
     */
    public $serialNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $serialNumberLocation;
    /**
     * @var SearchBooleanField
     */
    public $shipIndividually;
    /**
     * @var SearchMultiSelectField
     */
    public $shipPackage;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $shippingCarrier;
    /**
     * @var SearchDoubleField
     */
    public $shippingRate;
    /**
     * @var SearchStringField
     */
    public $shoppingDotComCategory;
    /**
     * @var SearchBooleanField
     */
    public $shoppingProductFeed;
    /**
     * @var SearchLongField
     */
    public $shopzillaCategoryId;
    /**
     * @var SearchBooleanField
     */
    public $shopzillaProductFeed;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $sitemapPriority;
    /**
     * @var SearchMultiSelectField
     */
    public $softDescriptor;
    /**
     * @var SearchDoubleField
     */
    public $startingPrice;
    /**
     * @var SearchStringField
     */
    public $stockDescription;
    /**
     * @var SearchMultiSelectField
     */
    public $stockUnit;
    /**
     * @var SearchStringField
     */
    public $storeDescription;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $subType;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $supplyLotSizingMethod;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $supplyReplenishmentMethod;
    /**
     * @var SearchLongField
     */
    public $supplyTimeFence;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $supplyType;
    /**
     * @var SearchMultiSelectField
     */
    public $taxCode;
    /**
     * @var SearchMultiSelectField
     */
    public $taxSchedule;
    /**
     * @var SearchStringField
     */
    public $thumbnailUrl;
    /**
     * @var SearchDoubleField
     */
    public $totalValue;
    /**
     * @var SearchBooleanField
     */
    public $trackLandedCost;
    /**
     * @var SearchDoubleField
     */
    public $transferPrice;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchMultiSelectField
     */
    public $unitsType;
    /**
     * @var SearchStringField
     */
    public $upcCode;
    /**
     * @var SearchStringField
     */
    public $urlComponent;
    /**
     * @var SearchBooleanField
     */
    public $useBins;
    /**
     * @var SearchBooleanField
     */
    public $useComponentYield;
    /**
     * @var SearchBooleanField
     */
    public $useMarginalRates;
    /**
     * @var SearchMultiSelectField
     */
    public $vendor;
    /**
     * @var SearchStringField
     */
    public $vendorCode;
    /**
     * @var SearchDoubleField
     */
    public $vendorCost;
    /**
     * @var SearchDoubleField
     */
    public $vendorCostEntered;
    /**
     * @var SearchStringField
     */
    public $vendorName;
    /**
     * @var SearchMultiSelectField
     */
    public $vendorPriceCurrency;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $vsoeDeferral;
    /**
     * @var SearchBooleanField
     */
    public $vsoeDelivered;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $vsoePermitDiscount;
    /**
     * @var SearchDoubleField
     */
    public $vsoePrice;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $vsoeSopGroup;
    /**
     * @var SearchMultiSelectField
     */
    public $webSite;
    /**
     * @var SearchDoubleField
     */
    public $weight;
    /**
     * @var SearchBooleanField
     */
    public $yahooProductFeed;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accBookRevRecForecastRule' => 'SearchMultiSelectField',
        'account' => 'SearchMultiSelectField',
        'accountingBook' => 'SearchMultiSelectField',
        'accountingBookAmortization' => 'SearchMultiSelectField',
        'accountingBookCreatePlansOn' => 'SearchMultiSelectField',
        'accountingBookRevRecRule' => 'SearchMultiSelectField',
        'accountingBookRevRecSchedule' => 'SearchMultiSelectField',
        'allowedShippingMethod' => 'SearchMultiSelectField',
        'alternateDemandSourceItem' => 'SearchMultiSelectField',
        'atpLeadTime' => 'SearchDoubleField',
        'atpMethod' => 'SearchEnumMultiSelectField',
        'autoLeadTime' => 'SearchBooleanField',
        'autoPreferredStockLevel' => 'SearchBooleanField',
        'autoReorderPoint' => 'SearchBooleanField',
        'availableToPartners' => 'SearchBooleanField',
        'averageCost' => 'SearchDoubleField',
        'backwardConsumptionDays' => 'SearchLongField',
        'binNumber' => 'SearchStringField',
        'binOnHandAvail' => 'SearchDoubleField',
        'binOnHandCount' => 'SearchDoubleField',
        'bomQuantity' => 'SearchDoubleField',
        'buildEntireAssembly' => 'SearchBooleanField',
        'buildTime' => 'SearchDoubleField',
        'buyItNowPrice' => 'SearchDoubleField',
        'caption' => 'SearchStringField',
        'category' => 'SearchMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'component' => 'SearchMultiSelectField',
        'componentOf' => 'SearchMultiSelectField',
        'componentYield' => 'SearchDoubleField',
        'contingentRevenueHandling' => 'SearchBooleanField',
        'copyDescription' => 'SearchBooleanField',
        'correlatedItem' => 'SearchMultiSelectField',
        'correlatedItemCorrelation' => 'SearchDoubleField',
        'correlatedItemCount' => 'SearchLongField',
        'correlatedItemLift' => 'SearchDoubleField',
        'correlatedItemPurchaseRate' => 'SearchDoubleField',
        'cost' => 'SearchDoubleField',
        'costAccountingStatus' => 'SearchEnumMultiSelectField',
        'costCategory' => 'SearchMultiSelectField',
        'costEstimate' => 'SearchDoubleField',
        'costEstimateType' => 'SearchEnumMultiSelectField',
        'costingMethod' => 'SearchEnumMultiSelectField',
        'countryOfManufacture' => 'SearchEnumMultiSelectField',
        'created' => 'SearchDateField',
        'createJob' => 'SearchBooleanField',
        'createRevenuePlansOn' => 'SearchMultiSelectField',
        'dateViewed' => 'SearchDateField',
        'daysBeforeExpiration' => 'SearchDoubleField',
        'defaultReturnCost' => 'SearchDoubleField',
        'defaultShippingMethod' => 'SearchMultiSelectField',
        'deferRevRec' => 'SearchBooleanField',
        'demandModifier' => 'SearchDoubleField',
        'demandSource' => 'SearchEnumMultiSelectField',
        'demandTimeFence' => 'SearchLongField',
        'department' => 'SearchMultiSelectField',
        'directRevenuePosting' => 'SearchBooleanField',
        'displayIneBayStore' => 'SearchBooleanField',
        'displayName' => 'SearchStringField',
        'distributionCategory' => 'SearchMultiSelectField',
        'distributionNetwork' => 'SearchMultiSelectField',
        'dontShowPrice' => 'SearchBooleanField',
        'eBayItemDescription' => 'SearchStringField',
        'eBayItemSubtitle' => 'SearchStringField',
        'eBayItemTitle' => 'SearchStringField',
        'ebayRelistingOption' => 'SearchEnumMultiSelectField',
        'effectiveBomControl' => 'SearchEnumMultiSelectField',
        'effectiveDate' => 'SearchDateField',
        'effectiveRevision' => 'SearchMultiSelectField',
        'endAuctionsWhenOutOfStock' => 'SearchBooleanField',
        'excludeFromSitemap' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'featuredDescription' => 'SearchStringField',
        'feedDescription' => 'SearchStringField',
        'feedName' => 'SearchStringField',
        'fixedLotSize' => 'SearchDoubleField',
        'forwardConsumptionDays' => 'SearchLongField',
        'fraudRisk' => 'SearchEnumMultiSelectField',
        'froogleProductFeed' => 'SearchBooleanField',
        'fxCost' => 'SearchDoubleField',
        'generateAccruals' => 'SearchBooleanField',
        'giftCertAuthCode' => 'SearchStringField',
        'giftCertEmail' => 'SearchStringField',
        'giftCertExpDate' => 'SearchDateField',
        'giftCertFrom' => 'SearchStringField',
        'giftCertMsg' => 'SearchStringField',
        'giftCertOrigAmt' => 'SearchStringField',
        'giftCertRecipient' => 'SearchStringField',
        'hierarchyNode' => 'SearchMultiSelectField',
        'hierarchyVersion' => 'SearchMultiSelectField',
        'imageUrl' => 'SearchStringField',
        'includeChildren' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'inventoryLocation' => 'SearchMultiSelectField',
        'invtClassification' => 'SearchEnumMultiSelectField',
        'invtCountInterval' => 'SearchLongField',
        'isAvailable' => 'SearchBooleanField',
        'isDropShipItem' => 'SearchBooleanField',
        'isFulfillable' => 'SearchBooleanField',
        'isGcoCompliant' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isLotItem' => 'SearchBooleanField',
        'isOnline' => 'SearchBooleanField',
        'isPreferredVendor' => 'SearchBooleanField',
        'isSerialItem' => 'SearchBooleanField',
        'isSpecialOrderItem' => 'SearchBooleanField',
        'isSpecialWorkOrderItem' => 'SearchBooleanField',
        'isStorePickupAllowed' => 'SearchBooleanField',
        'issueProduct' => 'SearchMultiSelectField',
        'isTaxable' => 'SearchBooleanField',
        'isVsoeBundle' => 'SearchBooleanField',
        'isWip' => 'SearchBooleanField',
        'itemId' => 'SearchStringField',
        'itemRevenueCategory' => 'SearchMultiSelectField',
        'itemUrl' => 'SearchStringField',
        'lastInvtCountDate' => 'SearchDateField',
        'lastModifiedDate' => 'SearchDateField',
        'lastPurchasePrice' => 'SearchDoubleField',
        'lastQuantityAvailableChange' => 'SearchDateField',
        'leadTime' => 'SearchLongField',
        'listingDuration' => 'SearchEnumMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'locationAllowStorePickup' => 'SearchBooleanField',
        'locationAtpLeadTime' => 'SearchDoubleField',
        'locationAverageCost' => 'SearchDoubleField',
        'locationBuildTime' => 'SearchDoubleField',
        'locationCost' => 'SearchDoubleField',
        'locationCostAccountingStatus' => 'SearchEnumMultiSelectField',
        'locationDefaultReturnCost' => 'SearchDoubleField',
        'locationDemandSource' => 'SearchEnumMultiSelectField',
        'locationDemandTimeFence' => 'SearchLongField',
        'locationFixedLotSize' => 'SearchDoubleField',
        'locationInventoryCostTemplate' => 'SearchMultiSelectField',
        'locationInvtClassification' => 'SearchEnumMultiSelectField',
        'locationInvtCountInterval' => 'SearchLongField',
        'locationLastInvtCountDate' => 'SearchDateField',
        'locationLeadTime' => 'SearchLongField',
        'locationNextInvtCountDate' => 'SearchDateField',
        'locationPeriodicLotSizeDays' => 'SearchLongField',
        'locationPeriodicLotSizeType' => 'SearchEnumMultiSelectField',
        'locationPreferredStockLevel' => 'SearchDoubleField',
        'locationQtyAvailForStorePickup' => 'SearchDoubleField',
        'locationQuantityAvailable' => 'SearchDoubleField',
        'locationQuantityBackOrdered' => 'SearchDoubleField',
        'locationQuantityCommitted' => 'SearchDoubleField',
        'locationQuantityInTransit' => 'SearchDoubleField',
        'locationQuantityOnHand' => 'SearchDoubleField',
        'locationQuantityOnOrder' => 'SearchDoubleField',
        'locationReorderPoint' => 'SearchDoubleField',
        'locationRescheduleInDays' => 'SearchLongField',
        'locationRescheduleOutDays' => 'SearchLongField',
        'locationSafetyStockLevel' => 'SearchDoubleField',
        'locationStorePickupBufferStock' => 'SearchDoubleField',
        'locationSupplyLotSizingMethod' => 'SearchEnumMultiSelectField',
        'locationSupplyTimeFence' => 'SearchLongField',
        'locationSupplyType' => 'SearchEnumMultiSelectField',
        'locationTotalValue' => 'SearchDoubleField',
        'locBackwardConsumptionDays' => 'SearchLongField',
        'locForwardConsumptionDays' => 'SearchLongField',
        'manufacturer' => 'SearchStringField',
        'manufactureraddr1' => 'SearchStringField',
        'manufacturerCity' => 'SearchStringField',
        'manufacturerState' => 'SearchStringField',
        'manufacturerTariff' => 'SearchStringField',
        'manufacturerTaxId' => 'SearchStringField',
        'manufacturerZip' => 'SearchStringField',
        'manufacturingChargeItem' => 'SearchBooleanField',
        'matchBillToReceipt' => 'SearchBooleanField',
        'matrix' => 'SearchBooleanField',
        'matrixChild' => 'SearchBooleanField',
        'maximumQuantity' => 'SearchLongField',
        'metaTagHtml' => 'SearchStringField',
        'minimumQuantity' => 'SearchLongField',
        'mossApplies' => 'SearchBooleanField',
        'mpn' => 'SearchStringField',
        'multManufactureAddr' => 'SearchBooleanField',
        'nexTagCategory' => 'SearchStringField',
        'nexTagProductFeed' => 'SearchBooleanField',
        'nextInvtCountDate' => 'SearchDateField',
        'numActiveListings' => 'SearchLongField',
        'numberAllowedDownloads' => 'SearchDoubleField',
        'numCurrentlyListed' => 'SearchLongField',
        'obsoleteDate' => 'SearchDateField',
        'obsoleteRevision' => 'SearchMultiSelectField',
        'offerSupport' => 'SearchBooleanField',
        'onlineCustomerPrice' => 'SearchDoubleField',
        'onSpecial' => 'SearchBooleanField',
        'otherVendor' => 'SearchMultiSelectField',
        'outOfStockBehavior' => 'SearchMultiSelectField',
        'overallQuantityPricingType' => 'SearchEnumMultiSelectField',
        'overheadType' => 'SearchEnumMultiSelectField',
        'pageTitle' => 'SearchStringField',
        'parent' => 'SearchMultiSelectField',
        'periodicLotSizeDays' => 'SearchLongField',
        'periodicLotSizeType' => 'SearchEnumMultiSelectField',
        'preferenceCriterion' => 'SearchStringField',
        'preferredBin' => 'SearchBooleanField',
        'preferredLocation' => 'SearchMultiSelectField',
        'preferredStockLevel' => 'SearchDoubleField',
        'preferredStockLevelDays' => 'SearchLongField',
        'price' => 'SearchDoubleField',
        'pricesIncludeTax' => 'SearchBooleanField',
        'pricingGroup' => 'SearchMultiSelectField',
        'primaryCategory' => 'SearchLongField',
        'purchaseOrderAmount' => 'SearchDoubleField',
        'purchaseOrderQuantity' => 'SearchDoubleField',
        'purchaseOrderQuantityDiff' => 'SearchDoubleField',
        'purchaseUnit' => 'SearchMultiSelectField',
        'quantityAvailable' => 'SearchDoubleField',
        'quantityBackOrdered' => 'SearchDoubleField',
        'quantityCommitted' => 'SearchDoubleField',
        'quantityOnHand' => 'SearchDoubleField',
        'quantityOnOrder' => 'SearchDoubleField',
        'quantityPricingSchedule' => 'SearchMultiSelectField',
        'receiptAmount' => 'SearchDoubleField',
        'receiptQuantity' => 'SearchDoubleField',
        'receiptQuantityDiff' => 'SearchDoubleField',
        'reorderMultiple' => 'SearchLongField',
        'reorderPoint' => 'SearchDoubleField',
        'rescheduleInDays' => 'SearchLongField',
        'rescheduleOutDays' => 'SearchLongField',
        'reservePrice' => 'SearchDoubleField',
        'revenueAllocationGroup' => 'SearchMultiSelectField',
        'revenueRecognitionRule' => 'SearchMultiSelectField',
        'revRecForecastRule' => 'SearchMultiSelectField',
        'revRecSchedule' => 'SearchMultiSelectField',
        'roundUpAsComponent' => 'SearchBooleanField',
        'safetyStockLevel' => 'SearchDoubleField',
        'safetyStockLevelDays' => 'SearchLongField',
        'salesDescription' => 'SearchStringField',
        'saleUnit' => 'SearchMultiSelectField',
        'sameAsPrimaryBookAmortization' => 'SearchBooleanField',
        'sameAsPrimaryBookRevRec' => 'SearchBooleanField',
        'scheduleBCode' => 'SearchEnumMultiSelectField',
        'scheduleBNumber' => 'SearchStringField',
        'scheduleBQuantity' => 'SearchStringField',
        'searchKeywords' => 'SearchStringField',
        'seasonalDemand' => 'SearchBooleanField',
        'sellOnEBay' => 'SearchBooleanField',
        'serialNumber' => 'SearchStringField',
        'serialNumberLocation' => 'SearchMultiSelectField',
        'shipIndividually' => 'SearchBooleanField',
        'shipPackage' => 'SearchMultiSelectField',
        'shippingCarrier' => 'SearchEnumMultiSelectField',
        'shippingRate' => 'SearchDoubleField',
        'shoppingDotComCategory' => 'SearchStringField',
        'shoppingProductFeed' => 'SearchBooleanField',
        'shopzillaCategoryId' => 'SearchLongField',
        'shopzillaProductFeed' => 'SearchBooleanField',
        'sitemapPriority' => 'SearchEnumMultiSelectField',
        'softDescriptor' => 'SearchMultiSelectField',
        'startingPrice' => 'SearchDoubleField',
        'stockDescription' => 'SearchStringField',
        'stockUnit' => 'SearchMultiSelectField',
        'storeDescription' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'subType' => 'SearchEnumMultiSelectField',
        'supplyLotSizingMethod' => 'SearchEnumMultiSelectField',
        'supplyReplenishmentMethod' => 'SearchEnumMultiSelectField',
        'supplyTimeFence' => 'SearchLongField',
        'supplyType' => 'SearchEnumMultiSelectField',
        'taxCode' => 'SearchMultiSelectField',
        'taxSchedule' => 'SearchMultiSelectField',
        'thumbnailUrl' => 'SearchStringField',
        'totalValue' => 'SearchDoubleField',
        'trackLandedCost' => 'SearchBooleanField',
        'transferPrice' => 'SearchDoubleField',
        'type' => 'SearchEnumMultiSelectField',
        'unitsType' => 'SearchMultiSelectField',
        'upcCode' => 'SearchStringField',
        'urlComponent' => 'SearchStringField',
        'useBins' => 'SearchBooleanField',
        'useComponentYield' => 'SearchBooleanField',
        'useMarginalRates' => 'SearchBooleanField',
        'vendor' => 'SearchMultiSelectField',
        'vendorCode' => 'SearchStringField',
        'vendorCost' => 'SearchDoubleField',
        'vendorCostEntered' => 'SearchDoubleField',
        'vendorName' => 'SearchStringField',
        'vendorPriceCurrency' => 'SearchMultiSelectField',
        'vsoeDeferral' => 'SearchEnumMultiSelectField',
        'vsoeDelivered' => 'SearchBooleanField',
        'vsoePermitDiscount' => 'SearchEnumMultiSelectField',
        'vsoePrice' => 'SearchDoubleField',
        'vsoeSopGroup' => 'SearchEnumMultiSelectField',
        'webSite' => 'SearchMultiSelectField',
        'weight' => 'SearchDoubleField',
        'yahooProductFeed' => 'SearchBooleanField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
