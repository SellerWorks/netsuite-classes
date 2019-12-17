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
 * ItemSearchRowBasic.
 */
class ItemSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $accBookRevRecForecastRule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBookAmortization;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBookCreatePlansOn;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBookRevRecRule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBookRevRecSchedule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $allowedShippingMethod;
    /**
     * @var SearchColumnStringField[]
     */
    public $alternateDemandSourceItem;
    /**
     * @var SearchColumnSelectField[]
     */
    public $assetAccount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $atpLeadTime;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $atpMethod;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $autoLeadTime;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $autoPreferredStockLevel;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $autoReorderPoint;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableToPartners;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $averageCost;
    /**
     * @var SearchColumnLongField[]
     */
    public $backwardConsumptionDays;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $basePrice;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billExchRateVarianceAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billPriceVarianceAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billQtyVarianceAcct;
    /**
     * @var SearchColumnStringField[]
     */
    public $binNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $binOnHandAvail;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $binOnHandCount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $bomQuantity;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $buildEntireAssembly;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $buildTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $buyItNowPrice;
    /**
     * @var SearchColumnStringField[]
     */
    public $category;
    /**
     * @var SearchColumnStringField[]
     */
    public $categoryPreferred;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $componentYield;
    /**
     * @var SearchColumnSelectField[]
     */
    public $consumptionUnit;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $contingentRevenueHandling;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $copyDescription;
    /**
     * @var SearchColumnSelectField[]
     */
    public $correlatedItem;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $correlatedItemCorrelation;
    /**
     * @var SearchColumnLongField[]
     */
    public $correlatedItemCount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $correlatedItemLift;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $correlatedItemPurchaseRate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $costAccountingStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $costCategory;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costEstimate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $costEstimateType;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $costingMethod;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $countryOfManufacture;
    /**
     * @var SearchColumnDateField[]
     */
    public $created;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $createJob;
    /**
     * @var SearchColumnSelectField[]
     */
    public $createRevenuePlansOn;
    /**
     * @var SearchColumnSelectField[]
     */
    public $custReturnVarianceAccount;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateViewed;
    /**
     * @var SearchColumnStringField[]
     */
    public $daysBeforeExpiration;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $defaultReturnCost;
    /**
     * @var SearchColumnStringField[]
     */
    public $defaultShippingMethod;
    /**
     * @var SearchColumnSelectField[]
     */
    public $deferredExpenseAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $deferredRevenueAccount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $deferRevRec;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $demandModifier;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $demandSource;
    /**
     * @var SearchColumnLongField[]
     */
    public $demandTimeFence;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnSelectField[]
     */
    public $departmentnohierarchy;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $directRevenuePosting;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $displayIneBayStore;
    /**
     * @var SearchColumnStringField[]
     */
    public $displayName;
    /**
     * @var SearchColumnSelectField[]
     */
    public $distributionCategory;
    /**
     * @var SearchColumnSelectField[]
     */
    public $distributionNetwork;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $dontShowPrice;
    /**
     * @var SearchColumnStringField[]
     */
    public $eBayItemDescription;
    /**
     * @var SearchColumnStringField[]
     */
    public $eBayItemSubtitle;
    /**
     * @var SearchColumnStringField[]
     */
    public $eBayItemTitle;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $ebayRelistingOption;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $effectiveBomControl;
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $effectiveRevision;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $endAuctionsWhenOutOfStock;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $excludeFromSitemap;
    /**
     * @var SearchColumnSelectField[]
     */
    public $expenseAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $featuredDescription;
    /**
     * @var SearchColumnStringField[]
     */
    public $feedDescription;
    /**
     * @var SearchColumnStringField[]
     */
    public $feedName;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fixedLotSize;
    /**
     * @var SearchColumnLongField[]
     */
    public $forwardConsumptionDays;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $fraudRisk;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $froogleProductFeed;
    /**
     * @var SearchColumnLongField[]
     */
    public $futureHorizon;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxCost;
    /**
     * @var SearchColumnSelectField[]
     */
    public $gainLossAccount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $generateAccruals;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertAuthCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertEmail;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertExpirationDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertFrom;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertMessage;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertOriginalAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $giftCertRecipient;
    /**
     * @var SearchColumnStringField[]
     */
    public $hierarchyNode;
    /**
     * @var SearchColumnStringField[]
     */
    public $hierarchyVersion;
    /**
     * @var SearchColumnLongField[]
     */
    public $hits;
    /**
     * @var SearchColumnStringField[]
     */
    public $imageUrl;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $includeChildren;
    /**
     * @var SearchColumnSelectField[]
     */
    public $incomeAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $intercoDefRevAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $intercoExpenseAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $intercoIncomeAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $inventoryLocation;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $invtClassification;
    /**
     * @var SearchColumnLongField[]
     */
    public $invtCountInterval;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isAvailable;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDropShipItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isFulfillable;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isGcoCompliant;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isLotItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isOnline;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSerialItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSpecialOrderItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSpecialWorkOrderItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isStorePickupAllowed;
    /**
     * @var SearchColumnSelectField[]
     */
    public $issueProduct;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isTaxable;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isVsoeBundle;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isWip;
    /**
     * @var SearchColumnStringField[]
     */
    public $itemId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $itemRevenueCategory;
    /**
     * @var SearchColumnStringField[]
     */
    public $itemUrl;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastInvtCountDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $lastPurchasePrice;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastQuantityAvailableChange;
    /**
     * @var SearchColumnLongField[]
     */
    public $leadTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $liabilityAccount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $listingDuration;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $locationAllowStorePickup;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationAtpLeadTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationAverageCost;
    /**
     * @var SearchColumnStringField[]
     */
    public $locationBinQuantityAvailable;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationBuildTime;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationCost;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationCostAccountingStatus;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationDefaultReturnCost;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationDemandSource;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationDemandTimeFence;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationFixedLotSize;
    /**
     * @var SearchColumnStringField[]
     */
    public $locationInventoryCostTemplate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationInvtClassification;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationInvtCountInterval;
    /**
     * @var SearchColumnDateField[]
     */
    public $locationLastInvtCountDate;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationLeadTime;
    /**
     * @var SearchColumnDateField[]
     */
    public $locationNextInvtCountDate;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationPeriodicLotSizeDays;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationPeriodicLotSizeType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationPreferredStockLevel;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQtyAvailForStorePickup;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityAvailable;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityBackOrdered;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityCommitted;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityInTransit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityOnHand;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityOnOrder;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationReOrderPoint;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationRescheduleInDays;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationRescheduleOutDays;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationSafetyStockLevel;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationStorePickupBufferStock;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationSupplyLotSizingMethod;
    /**
     * @var SearchColumnLongField[]
     */
    public $locationSupplyTimeFence;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationSupplyType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $locationTotalValue;
    /**
     * @var SearchColumnLongField[]
     */
    public $locBackwardConsumptionDays;
    /**
     * @var SearchColumnLongField[]
     */
    public $locForwardConsumptionDays;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturer;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturerAddr1;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturerCity;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturerState;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturerTariff;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturerTaxId;
    /**
     * @var SearchColumnStringField[]
     */
    public $manufacturerZip;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $manufacturingChargeItem;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $matchBillToReceipt;
    /**
     * @var SearchColumnStringField[]
     */
    public $maximumQuantity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $memberItem;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $memberQuantity;
    /**
     * @var SearchColumnStringField[]
     */
    public $metaTagHtml;
    /**
     * @var SearchColumnStringField[]
     */
    public $minimumQuantity;
    /**
     * @var SearchColumnDateField[]
     */
    public $modified;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $mossApplies;
    /**
     * @var SearchColumnStringField[]
     */
    public $mpn;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $multManufactureAddr;
    /**
     * @var SearchColumnStringField[]
     */
    public $nextagCategory;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $nextagProductFeed;
    /**
     * @var SearchColumnDateField[]
     */
    public $nextInvtCountDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $noPriceMessage;
    /**
     * @var SearchColumnLongField[]
     */
    public $numActiveListings;
    /**
     * @var SearchColumnStringField[]
     */
    public $numberAllowedDownloads;
    /**
     * @var SearchColumnLongField[]
     */
    public $numCurrentlyListed;
    /**
     * @var SearchColumnDateField[]
     */
    public $obsoleteDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $obsoleteRevision;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $offerSupport;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $onlineCustomerPrice;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $onlinePrice;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $onSpecial;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $otherPrices;
    /**
     * @var SearchColumnSelectField[]
     */
    public $otherVendor;
    /**
     * @var SearchColumnStringField[]
     */
    public $outOfStockBehavior;
    /**
     * @var SearchColumnStringField[]
     */
    public $outOfStockMessage;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $overallQuantityPricingType;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $overheadType;
    /**
     * @var SearchColumnStringField[]
     */
    public $pageTitle;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var SearchColumnLongField[]
     */
    public $periodicLotSizeDays;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $periodicLotSizeType;
    /**
     * @var SearchColumnStringField[]
     */
    public $preferenceCriterion;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $preferredBin;
    /**
     * @var SearchColumnSelectField[]
     */
    public $preferredLocation;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $preferredStockLevel;
    /**
     * @var SearchColumnLongField[]
     */
    public $preferredStockLevelDays;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $pricesIncludeTax;
    /**
     * @var SearchColumnSelectField[]
     */
    public $pricingGroup;
    /**
     * @var SearchColumnStringField[]
     */
    public $primaryCategory;
    /**
     * @var SearchColumnSelectField[]
     */
    public $prodPriceVarianceAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $prodQtyVarianceAcct;
    /**
     * @var SearchColumnStringField[]
     */
    public $purchaseDescription;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var SearchColumnSelectField[]
     */
    public $purchasePriceVarianceAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $purchaseUnit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityAvailable;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityBackOrdered;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityCommitted;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityOnHand;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityOnOrder;
    /**
     * @var SearchColumnSelectField[]
     */
    public $quantityPricingSchedule;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;
    /**
     * @var SearchColumnLongField[]
     */
    public $reorderMultiple;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $reOrderPoint;
    /**
     * @var SearchColumnLongField[]
     */
    public $rescheduleInDays;
    /**
     * @var SearchColumnLongField[]
     */
    public $rescheduleOutDays;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $reservePrice;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revenueAllocationGroup;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revenueRecognitionRule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revRecForecastRule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revReclassFXAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $revRecSchedule;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $roundUpAsComponent;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $safetyStockLevel;
    /**
     * @var SearchColumnLongField[]
     */
    public $safetyStockLevelDays;
    /**
     * @var SearchColumnStringField[]
     */
    public $salesDescription;
    /**
     * @var SearchColumnSelectField[]
     */
    public $salesTaxCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $saleUnit;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $sameAsPrimaryBookAmortization;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $sameAsPrimaryBookRevRec;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $scheduleBCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $scheduleBNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $scheduleBQuantity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $scrapAcct;
    /**
     * @var SearchColumnStringField[]
     */
    public $searchKeywords;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $seasonalDemand;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $sellOnEBay;
    /**
     * @var SearchColumnStringField[]
     */
    public $serialNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $serialNumberLocation;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $shipIndividually;
    /**
     * @var SearchColumnSelectField[]
     */
    public $shipPackage;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $shippingCarrier;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $shippingRate;
    /**
     * @var SearchColumnStringField[]
     */
    public $shoppingDotComCategory;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $shoppingProductFeed;
    /**
     * @var SearchColumnLongField[]
     */
    public $shopzillaCategoryId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $shopzillaProductFeed;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $sitemapPriority;
    /**
     * @var SearchColumnSelectField[]
     */
    public $softDescriptor;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $startingPrice;
    /**
     * @var SearchColumnStringField[]
     */
    public $stockDescription;
    /**
     * @var SearchColumnSelectField[]
     */
    public $stockUnit;
    /**
     * @var SearchColumnStringField[]
     */
    public $storeDescription;
    /**
     * @var SearchColumnStringField[]
     */
    public $storeDetailedDescription;
    /**
     * @var SearchColumnSelectField[]
     */
    public $storeDisplayImage;
    /**
     * @var SearchColumnStringField[]
     */
    public $storeDisplayName;
    /**
     * @var SearchColumnSelectField[]
     */
    public $storeDisplayThumbnail;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $subType;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $supplyLotSizingMethod;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $supplyReplenishmentMethod;
    /**
     * @var SearchColumnLongField[]
     */
    public $supplyTimeFence;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $supplyType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxSchedule;
    /**
     * @var SearchColumnStringField[]
     */
    public $thumbNailUrl;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $totalValue;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $trackLandedCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $transferPrice;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var SearchColumnSelectField[]
     */
    public $unbuildVarianceAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $unitsType;
    /**
     * @var SearchColumnStringField[]
     */
    public $upcCode;
    /**
     * @var SearchColumnStringField[]
     */
    public $urlComponent;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useBins;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useComponentYield;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useMarginalRates;
    /**
     * @var SearchColumnSelectField[]
     */
    public $vendor;
    /**
     * @var SearchColumnStringField[]
     */
    public $vendorCode;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vendorCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vendorCostEntered;
    /**
     * @var SearchColumnStringField[]
     */
    public $vendorName;
    /**
     * @var SearchColumnStringField[]
     */
    public $vendorPriceCurrency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $vendorSchedule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $vendReturnVarianceAccount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoeDeferral;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $vsoeDelivered;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoePermitDiscount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vsoePrice;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoeSopGroup;
    /**
     * @var SearchColumnSelectField[]
     */
    public $webSite;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $weight;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $weightUnit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $wipAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $wipVarianceAcct;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $yahooProductFeed;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accBookRevRecForecastRule' => 'SearchColumnSelectField[]',
        'accountingBook' => 'SearchColumnSelectField[]',
        'accountingBookAmortization' => 'SearchColumnSelectField[]',
        'accountingBookCreatePlansOn' => 'SearchColumnSelectField[]',
        'accountingBookRevRecRule' => 'SearchColumnSelectField[]',
        'accountingBookRevRecSchedule' => 'SearchColumnSelectField[]',
        'allowedShippingMethod' => 'SearchColumnSelectField[]',
        'alternateDemandSourceItem' => 'SearchColumnStringField[]',
        'assetAccount' => 'SearchColumnSelectField[]',
        'atpLeadTime' => 'SearchColumnDoubleField[]',
        'atpMethod' => 'SearchColumnEnumSelectField[]',
        'autoLeadTime' => 'SearchColumnBooleanField[]',
        'autoPreferredStockLevel' => 'SearchColumnBooleanField[]',
        'autoReorderPoint' => 'SearchColumnBooleanField[]',
        'availableToPartners' => 'SearchColumnBooleanField[]',
        'averageCost' => 'SearchColumnDoubleField[]',
        'backwardConsumptionDays' => 'SearchColumnLongField[]',
        'basePrice' => 'SearchColumnDoubleField[]',
        'billExchRateVarianceAcct' => 'SearchColumnSelectField[]',
        'billPriceVarianceAcct' => 'SearchColumnSelectField[]',
        'billQtyVarianceAcct' => 'SearchColumnSelectField[]',
        'binNumber' => 'SearchColumnStringField[]',
        'binOnHandAvail' => 'SearchColumnDoubleField[]',
        'binOnHandCount' => 'SearchColumnDoubleField[]',
        'bomQuantity' => 'SearchColumnDoubleField[]',
        'buildEntireAssembly' => 'SearchColumnBooleanField[]',
        'buildTime' => 'SearchColumnDoubleField[]',
        'buyItNowPrice' => 'SearchColumnDoubleField[]',
        'category' => 'SearchColumnStringField[]',
        'categoryPreferred' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnSelectField[]',
        'componentYield' => 'SearchColumnDoubleField[]',
        'consumptionUnit' => 'SearchColumnSelectField[]',
        'contingentRevenueHandling' => 'SearchColumnBooleanField[]',
        'copyDescription' => 'SearchColumnBooleanField[]',
        'correlatedItem' => 'SearchColumnSelectField[]',
        'correlatedItemCorrelation' => 'SearchColumnDoubleField[]',
        'correlatedItemCount' => 'SearchColumnLongField[]',
        'correlatedItemLift' => 'SearchColumnDoubleField[]',
        'correlatedItemPurchaseRate' => 'SearchColumnDoubleField[]',
        'cost' => 'SearchColumnDoubleField[]',
        'costAccountingStatus' => 'SearchColumnEnumSelectField[]',
        'costCategory' => 'SearchColumnStringField[]',
        'costEstimate' => 'SearchColumnDoubleField[]',
        'costEstimateType' => 'SearchColumnEnumSelectField[]',
        'costingMethod' => 'SearchColumnEnumSelectField[]',
        'countryOfManufacture' => 'SearchColumnEnumSelectField[]',
        'created' => 'SearchColumnDateField[]',
        'createJob' => 'SearchColumnBooleanField[]',
        'createRevenuePlansOn' => 'SearchColumnSelectField[]',
        'custReturnVarianceAccount' => 'SearchColumnSelectField[]',
        'dateViewed' => 'SearchColumnDateField[]',
        'daysBeforeExpiration' => 'SearchColumnStringField[]',
        'defaultReturnCost' => 'SearchColumnDoubleField[]',
        'defaultShippingMethod' => 'SearchColumnStringField[]',
        'deferredExpenseAccount' => 'SearchColumnSelectField[]',
        'deferredRevenueAccount' => 'SearchColumnSelectField[]',
        'deferRevRec' => 'SearchColumnBooleanField[]',
        'demandModifier' => 'SearchColumnDoubleField[]',
        'demandSource' => 'SearchColumnEnumSelectField[]',
        'demandTimeFence' => 'SearchColumnLongField[]',
        'department' => 'SearchColumnSelectField[]',
        'departmentnohierarchy' => 'SearchColumnSelectField[]',
        'directRevenuePosting' => 'SearchColumnBooleanField[]',
        'displayIneBayStore' => 'SearchColumnBooleanField[]',
        'displayName' => 'SearchColumnStringField[]',
        'distributionCategory' => 'SearchColumnSelectField[]',
        'distributionNetwork' => 'SearchColumnSelectField[]',
        'dontShowPrice' => 'SearchColumnBooleanField[]',
        'eBayItemDescription' => 'SearchColumnStringField[]',
        'eBayItemSubtitle' => 'SearchColumnStringField[]',
        'eBayItemTitle' => 'SearchColumnStringField[]',
        'ebayRelistingOption' => 'SearchColumnEnumSelectField[]',
        'effectiveBomControl' => 'SearchColumnEnumSelectField[]',
        'effectiveDate' => 'SearchColumnDateField[]',
        'effectiveRevision' => 'SearchColumnSelectField[]',
        'endAuctionsWhenOutOfStock' => 'SearchColumnBooleanField[]',
        'excludeFromSitemap' => 'SearchColumnBooleanField[]',
        'expenseAccount' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'featuredDescription' => 'SearchColumnStringField[]',
        'feedDescription' => 'SearchColumnStringField[]',
        'feedName' => 'SearchColumnStringField[]',
        'fixedLotSize' => 'SearchColumnDoubleField[]',
        'forwardConsumptionDays' => 'SearchColumnLongField[]',
        'fraudRisk' => 'SearchColumnEnumSelectField[]',
        'froogleProductFeed' => 'SearchColumnBooleanField[]',
        'futureHorizon' => 'SearchColumnLongField[]',
        'fxCost' => 'SearchColumnDoubleField[]',
        'gainLossAccount' => 'SearchColumnSelectField[]',
        'generateAccruals' => 'SearchColumnBooleanField[]',
        'giftCertAuthCode' => 'SearchColumnStringField[]',
        'giftCertEmail' => 'SearchColumnStringField[]',
        'giftCertExpirationDate' => 'SearchColumnStringField[]',
        'giftCertFrom' => 'SearchColumnStringField[]',
        'giftCertMessage' => 'SearchColumnStringField[]',
        'giftCertOriginalAmount' => 'SearchColumnStringField[]',
        'giftCertRecipient' => 'SearchColumnStringField[]',
        'hierarchyNode' => 'SearchColumnStringField[]',
        'hierarchyVersion' => 'SearchColumnStringField[]',
        'hits' => 'SearchColumnLongField[]',
        'imageUrl' => 'SearchColumnStringField[]',
        'includeChildren' => 'SearchColumnBooleanField[]',
        'incomeAccount' => 'SearchColumnSelectField[]',
        'intercoDefRevAccount' => 'SearchColumnSelectField[]',
        'intercoExpenseAccount' => 'SearchColumnSelectField[]',
        'intercoIncomeAccount' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'inventoryLocation' => 'SearchColumnSelectField[]',
        'invtClassification' => 'SearchColumnEnumSelectField[]',
        'invtCountInterval' => 'SearchColumnLongField[]',
        'isAvailable' => 'SearchColumnBooleanField[]',
        'isDropShipItem' => 'SearchColumnBooleanField[]',
        'isFulfillable' => 'SearchColumnBooleanField[]',
        'isGcoCompliant' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isLotItem' => 'SearchColumnBooleanField[]',
        'isOnline' => 'SearchColumnBooleanField[]',
        'isSerialItem' => 'SearchColumnBooleanField[]',
        'isSpecialOrderItem' => 'SearchColumnBooleanField[]',
        'isSpecialWorkOrderItem' => 'SearchColumnBooleanField[]',
        'isStorePickupAllowed' => 'SearchColumnBooleanField[]',
        'issueProduct' => 'SearchColumnSelectField[]',
        'isTaxable' => 'SearchColumnBooleanField[]',
        'isVsoeBundle' => 'SearchColumnBooleanField[]',
        'isWip' => 'SearchColumnBooleanField[]',
        'itemId' => 'SearchColumnStringField[]',
        'itemRevenueCategory' => 'SearchColumnSelectField[]',
        'itemUrl' => 'SearchColumnStringField[]',
        'lastInvtCountDate' => 'SearchColumnDateField[]',
        'lastPurchasePrice' => 'SearchColumnDoubleField[]',
        'lastQuantityAvailableChange' => 'SearchColumnDateField[]',
        'leadTime' => 'SearchColumnLongField[]',
        'liabilityAccount' => 'SearchColumnSelectField[]',
        'listingDuration' => 'SearchColumnEnumSelectField[]',
        'location' => 'SearchColumnSelectField[]',
        'locationAllowStorePickup' => 'SearchColumnBooleanField[]',
        'locationAtpLeadTime' => 'SearchColumnDoubleField[]',
        'locationAverageCost' => 'SearchColumnDoubleField[]',
        'locationBinQuantityAvailable' => 'SearchColumnStringField[]',
        'locationBuildTime' => 'SearchColumnDoubleField[]',
        'locationCost' => 'SearchColumnDoubleField[]',
        'locationCostAccountingStatus' => 'SearchColumnEnumSelectField[]',
        'locationDefaultReturnCost' => 'SearchColumnDoubleField[]',
        'locationDemandSource' => 'SearchColumnEnumSelectField[]',
        'locationDemandTimeFence' => 'SearchColumnLongField[]',
        'locationFixedLotSize' => 'SearchColumnDoubleField[]',
        'locationInventoryCostTemplate' => 'SearchColumnStringField[]',
        'locationInvtClassification' => 'SearchColumnEnumSelectField[]',
        'locationInvtCountInterval' => 'SearchColumnLongField[]',
        'locationLastInvtCountDate' => 'SearchColumnDateField[]',
        'locationLeadTime' => 'SearchColumnLongField[]',
        'locationNextInvtCountDate' => 'SearchColumnDateField[]',
        'locationPeriodicLotSizeDays' => 'SearchColumnLongField[]',
        'locationPeriodicLotSizeType' => 'SearchColumnEnumSelectField[]',
        'locationPreferredStockLevel' => 'SearchColumnDoubleField[]',
        'locationQtyAvailForStorePickup' => 'SearchColumnDoubleField[]',
        'locationQuantityAvailable' => 'SearchColumnDoubleField[]',
        'locationQuantityBackOrdered' => 'SearchColumnDoubleField[]',
        'locationQuantityCommitted' => 'SearchColumnDoubleField[]',
        'locationQuantityInTransit' => 'SearchColumnDoubleField[]',
        'locationQuantityOnHand' => 'SearchColumnDoubleField[]',
        'locationQuantityOnOrder' => 'SearchColumnDoubleField[]',
        'locationReOrderPoint' => 'SearchColumnDoubleField[]',
        'locationRescheduleInDays' => 'SearchColumnLongField[]',
        'locationRescheduleOutDays' => 'SearchColumnLongField[]',
        'locationSafetyStockLevel' => 'SearchColumnDoubleField[]',
        'locationStorePickupBufferStock' => 'SearchColumnDoubleField[]',
        'locationSupplyLotSizingMethod' => 'SearchColumnEnumSelectField[]',
        'locationSupplyTimeFence' => 'SearchColumnLongField[]',
        'locationSupplyType' => 'SearchColumnEnumSelectField[]',
        'locationTotalValue' => 'SearchColumnDoubleField[]',
        'locBackwardConsumptionDays' => 'SearchColumnLongField[]',
        'locForwardConsumptionDays' => 'SearchColumnLongField[]',
        'manufacturer' => 'SearchColumnStringField[]',
        'manufacturerAddr1' => 'SearchColumnStringField[]',
        'manufacturerCity' => 'SearchColumnStringField[]',
        'manufacturerState' => 'SearchColumnStringField[]',
        'manufacturerTariff' => 'SearchColumnStringField[]',
        'manufacturerTaxId' => 'SearchColumnStringField[]',
        'manufacturerZip' => 'SearchColumnStringField[]',
        'manufacturingChargeItem' => 'SearchColumnBooleanField[]',
        'matchBillToReceipt' => 'SearchColumnBooleanField[]',
        'maximumQuantity' => 'SearchColumnStringField[]',
        'memberItem' => 'SearchColumnSelectField[]',
        'memberQuantity' => 'SearchColumnDoubleField[]',
        'metaTagHtml' => 'SearchColumnStringField[]',
        'minimumQuantity' => 'SearchColumnStringField[]',
        'modified' => 'SearchColumnDateField[]',
        'mossApplies' => 'SearchColumnBooleanField[]',
        'mpn' => 'SearchColumnStringField[]',
        'multManufactureAddr' => 'SearchColumnBooleanField[]',
        'nextagCategory' => 'SearchColumnStringField[]',
        'nextagProductFeed' => 'SearchColumnBooleanField[]',
        'nextInvtCountDate' => 'SearchColumnDateField[]',
        'noPriceMessage' => 'SearchColumnStringField[]',
        'numActiveListings' => 'SearchColumnLongField[]',
        'numberAllowedDownloads' => 'SearchColumnStringField[]',
        'numCurrentlyListed' => 'SearchColumnLongField[]',
        'obsoleteDate' => 'SearchColumnDateField[]',
        'obsoleteRevision' => 'SearchColumnSelectField[]',
        'offerSupport' => 'SearchColumnBooleanField[]',
        'onlineCustomerPrice' => 'SearchColumnDoubleField[]',
        'onlinePrice' => 'SearchColumnDoubleField[]',
        'onSpecial' => 'SearchColumnBooleanField[]',
        'otherPrices' => 'SearchColumnDoubleField[]',
        'otherVendor' => 'SearchColumnSelectField[]',
        'outOfStockBehavior' => 'SearchColumnStringField[]',
        'outOfStockMessage' => 'SearchColumnStringField[]',
        'overallQuantityPricingType' => 'SearchColumnEnumSelectField[]',
        'overheadType' => 'SearchColumnEnumSelectField[]',
        'pageTitle' => 'SearchColumnStringField[]',
        'parent' => 'SearchColumnSelectField[]',
        'periodicLotSizeDays' => 'SearchColumnLongField[]',
        'periodicLotSizeType' => 'SearchColumnEnumSelectField[]',
        'preferenceCriterion' => 'SearchColumnStringField[]',
        'preferredBin' => 'SearchColumnBooleanField[]',
        'preferredLocation' => 'SearchColumnSelectField[]',
        'preferredStockLevel' => 'SearchColumnDoubleField[]',
        'preferredStockLevelDays' => 'SearchColumnLongField[]',
        'pricesIncludeTax' => 'SearchColumnBooleanField[]',
        'pricingGroup' => 'SearchColumnSelectField[]',
        'primaryCategory' => 'SearchColumnStringField[]',
        'prodPriceVarianceAcct' => 'SearchColumnSelectField[]',
        'prodQtyVarianceAcct' => 'SearchColumnSelectField[]',
        'purchaseDescription' => 'SearchColumnStringField[]',
        'purchaseOrderAmount' => 'SearchColumnDoubleField[]',
        'purchaseOrderQuantity' => 'SearchColumnDoubleField[]',
        'purchaseOrderQuantityDiff' => 'SearchColumnDoubleField[]',
        'purchasePriceVarianceAcct' => 'SearchColumnSelectField[]',
        'purchaseUnit' => 'SearchColumnSelectField[]',
        'quantityAvailable' => 'SearchColumnDoubleField[]',
        'quantityBackOrdered' => 'SearchColumnDoubleField[]',
        'quantityCommitted' => 'SearchColumnDoubleField[]',
        'quantityOnHand' => 'SearchColumnDoubleField[]',
        'quantityOnOrder' => 'SearchColumnDoubleField[]',
        'quantityPricingSchedule' => 'SearchColumnSelectField[]',
        'receiptAmount' => 'SearchColumnDoubleField[]',
        'receiptQuantity' => 'SearchColumnDoubleField[]',
        'receiptQuantityDiff' => 'SearchColumnDoubleField[]',
        'reorderMultiple' => 'SearchColumnLongField[]',
        'reOrderPoint' => 'SearchColumnDoubleField[]',
        'rescheduleInDays' => 'SearchColumnLongField[]',
        'rescheduleOutDays' => 'SearchColumnLongField[]',
        'reservePrice' => 'SearchColumnDoubleField[]',
        'revenueAllocationGroup' => 'SearchColumnSelectField[]',
        'revenueRecognitionRule' => 'SearchColumnSelectField[]',
        'revRecForecastRule' => 'SearchColumnSelectField[]',
        'revReclassFXAccount' => 'SearchColumnSelectField[]',
        'revRecSchedule' => 'SearchColumnSelectField[]',
        'roundUpAsComponent' => 'SearchColumnBooleanField[]',
        'safetyStockLevel' => 'SearchColumnDoubleField[]',
        'safetyStockLevelDays' => 'SearchColumnLongField[]',
        'salesDescription' => 'SearchColumnStringField[]',
        'salesTaxCode' => 'SearchColumnSelectField[]',
        'saleUnit' => 'SearchColumnSelectField[]',
        'sameAsPrimaryBookAmortization' => 'SearchColumnBooleanField[]',
        'sameAsPrimaryBookRevRec' => 'SearchColumnBooleanField[]',
        'scheduleBCode' => 'SearchColumnEnumSelectField[]',
        'scheduleBNumber' => 'SearchColumnStringField[]',
        'scheduleBQuantity' => 'SearchColumnStringField[]',
        'scrapAcct' => 'SearchColumnSelectField[]',
        'searchKeywords' => 'SearchColumnStringField[]',
        'seasonalDemand' => 'SearchColumnBooleanField[]',
        'sellOnEBay' => 'SearchColumnBooleanField[]',
        'serialNumber' => 'SearchColumnStringField[]',
        'serialNumberLocation' => 'SearchColumnStringField[]',
        'shipIndividually' => 'SearchColumnBooleanField[]',
        'shipPackage' => 'SearchColumnSelectField[]',
        'shippingCarrier' => 'SearchColumnEnumSelectField[]',
        'shippingRate' => 'SearchColumnDoubleField[]',
        'shoppingDotComCategory' => 'SearchColumnStringField[]',
        'shoppingProductFeed' => 'SearchColumnBooleanField[]',
        'shopzillaCategoryId' => 'SearchColumnLongField[]',
        'shopzillaProductFeed' => 'SearchColumnBooleanField[]',
        'sitemapPriority' => 'SearchColumnEnumSelectField[]',
        'softDescriptor' => 'SearchColumnSelectField[]',
        'startingPrice' => 'SearchColumnDoubleField[]',
        'stockDescription' => 'SearchColumnStringField[]',
        'stockUnit' => 'SearchColumnSelectField[]',
        'storeDescription' => 'SearchColumnStringField[]',
        'storeDetailedDescription' => 'SearchColumnStringField[]',
        'storeDisplayImage' => 'SearchColumnSelectField[]',
        'storeDisplayName' => 'SearchColumnStringField[]',
        'storeDisplayThumbnail' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'subType' => 'SearchColumnEnumSelectField[]',
        'supplyLotSizingMethod' => 'SearchColumnEnumSelectField[]',
        'supplyReplenishmentMethod' => 'SearchColumnEnumSelectField[]',
        'supplyTimeFence' => 'SearchColumnLongField[]',
        'supplyType' => 'SearchColumnEnumSelectField[]',
        'taxSchedule' => 'SearchColumnSelectField[]',
        'thumbNailUrl' => 'SearchColumnStringField[]',
        'totalValue' => 'SearchColumnDoubleField[]',
        'trackLandedCost' => 'SearchColumnBooleanField[]',
        'transferPrice' => 'SearchColumnDoubleField[]',
        'type' => 'SearchColumnEnumSelectField[]',
        'unbuildVarianceAccount' => 'SearchColumnSelectField[]',
        'unitsType' => 'SearchColumnSelectField[]',
        'upcCode' => 'SearchColumnStringField[]',
        'urlComponent' => 'SearchColumnStringField[]',
        'useBins' => 'SearchColumnBooleanField[]',
        'useComponentYield' => 'SearchColumnBooleanField[]',
        'useMarginalRates' => 'SearchColumnBooleanField[]',
        'vendor' => 'SearchColumnSelectField[]',
        'vendorCode' => 'SearchColumnStringField[]',
        'vendorCost' => 'SearchColumnDoubleField[]',
        'vendorCostEntered' => 'SearchColumnDoubleField[]',
        'vendorName' => 'SearchColumnStringField[]',
        'vendorPriceCurrency' => 'SearchColumnStringField[]',
        'vendorSchedule' => 'SearchColumnSelectField[]',
        'vendReturnVarianceAccount' => 'SearchColumnSelectField[]',
        'vsoeDeferral' => 'SearchColumnEnumSelectField[]',
        'vsoeDelivered' => 'SearchColumnBooleanField[]',
        'vsoePermitDiscount' => 'SearchColumnEnumSelectField[]',
        'vsoePrice' => 'SearchColumnDoubleField[]',
        'vsoeSopGroup' => 'SearchColumnEnumSelectField[]',
        'webSite' => 'SearchColumnSelectField[]',
        'weight' => 'SearchColumnDoubleField[]',
        'weightUnit' => 'SearchColumnEnumSelectField[]',
        'wipAcct' => 'SearchColumnSelectField[]',
        'wipVarianceAcct' => 'SearchColumnSelectField[]',
        'yahooProductFeed' => 'SearchColumnBooleanField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
