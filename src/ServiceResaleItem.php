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
 * ServiceResaleItem.
 */
class ServiceResaleItem extends Record
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
    public $manufacturingChargeItem;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var string
     */
    public $costUnits;
    /**
     * @var RecordRef
     */
    public $expenseAccount;
    /**
     * @var RecordRef
     */
    public $intercoExpenseAccount;
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
     * @var RecordRef
     */
    public $intercoIncomeAccount;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var ItemMatrixType
     */
    public $matrixType;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var RecordRef
     */
    public $unitsType;
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
    public $costEstimateUnits;
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
    public $intercoDefRevAccount;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var RecordRef
     */
    public $deferralAccount;
    /**
     * @var RecordRef
     */
    public $amortizationTemplate;
    /**
     * @var string
     */
    public $residual;
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
     * @var int
     */
    public $amortizationPeriod;
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
     * @var bool
     */
    public $isFulfillable;
    /**
     * @var bool
     */
    public $generateAccruals;
    /**
     * @var RecordRef
     */
    public $costCategory;
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
    public $createJob;
    /**
     * @var string
     */
    public $matrixItemNameTemplate;
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
    public $urlComponent;
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
     * @var ServiceItemTaskTemplatesList
     */
    public $itemTaskTemplatesList;
    /**
     * @var string
     */
    public $featuredDescription;
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
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var BillingRatesMatrix
     */
    public $billingRatesMatrix;
    /**
     * @var ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
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
     * @var RecordRef
     */
    public $vendor;
    /**
     * @var PresentationItemList
     */
    public $presentationItemList;
    /**
     * @var ServiceResaleItemHierarchyVersionsList
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
        'purchaseDescription' => 'string',
        'manufacturingChargeItem' => 'boolean',
        'cost' => 'float',
        'costUnits' => 'string',
        'expenseAccount' => 'RecordRef',
        'intercoExpenseAccount' => 'RecordRef',
        'salesDescription' => 'string',
        'includeChildren' => 'boolean',
        'incomeAccount' => 'RecordRef',
        'intercoIncomeAccount' => 'RecordRef',
        'taxSchedule' => 'RecordRef',
        'matrixType' => 'ItemMatrixType',
        'isTaxable' => 'boolean',
        'costEstimateType' => 'ItemCostEstimateType',
        'costEstimate' => 'float',
        'unitsType' => 'RecordRef',
        'purchaseUnit' => 'RecordRef',
        'saleUnit' => 'RecordRef',
        'costEstimateUnits' => 'string',
        'issueProduct' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'deferredRevenueAccount' => 'RecordRef',
        'intercoDefRevAccount' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'deferralAccount' => 'RecordRef',
        'amortizationTemplate' => 'RecordRef',
        'residual' => 'string',
        'deferRevRec' => 'boolean',
        'revenueRecognitionRule' => 'RecordRef',
        'revRecForecastRule' => 'RecordRef',
        'revenueAllocationGroup' => 'RecordRef',
        'createRevenuePlansOn' => 'RecordRef',
        'directRevenuePosting' => 'boolean',
        'contingentRevenueHandling' => 'boolean',
        'revReclassFXAccount' => 'RecordRef',
        'amortizationPeriod' => 'integer',
        'minimumQuantity' => 'integer',
        'enforceMinQtyInternally' => 'boolean',
        'maximumQuantity' => 'integer',
        'softDescriptor' => 'string',
        'pricesIncludeTax' => 'boolean',
        'quantityPricingSchedule' => 'RecordRef',
        'useMarginalRates' => 'boolean',
        'overallQuantityPricingType' => 'ItemOverallQuantityPricingType',
        'isFulfillable' => 'boolean',
        'generateAccruals' => 'boolean',
        'costCategory' => 'RecordRef',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'pricingGroup' => 'RecordRef',
        'minimumQuantityUnits' => 'string',
        'vsoePrice' => 'float',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'itemRevenueCategory' => 'RecordRef',
        'createJob' => 'boolean',
        'matrixItemNameTemplate' => 'string',
        'storeDisplayName' => 'string',
        'storeDisplayThumbnail' => 'RecordRef',
        'storeDisplayImage' => 'RecordRef',
        'storeDescription' => 'string',
        'storeDetailedDescription' => 'string',
        'storeItemTemplate' => 'RecordRef',
        'pageTitle' => 'string',
        'urlComponent' => 'string',
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
        'itemTaskTemplatesList' => 'ServiceItemTaskTemplatesList',
        'featuredDescription' => 'string',
        'customForm' => 'RecordRef',
        'itemId' => 'string',
        'upcCode' => 'string',
        'displayName' => 'string',
        'vendorName' => 'string',
        'parent' => 'RecordRef',
        'isOnline' => 'boolean',
        'isGcoCompliant' => 'boolean',
        'offerSupport' => 'boolean',
        'isInactive' => 'boolean',
        'availableToPartners' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiaryList' => 'RecordRefList',
        'currency' => 'string',
        'billingRatesMatrix' => 'BillingRatesMatrix',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'itemOptionsList' => 'ItemOptionsList',
        'matrixOptionList' => 'MatrixOptionList',
        'itemVendorList' => 'ItemVendorList',
        'pricingMatrix' => 'PricingMatrix',
        'purchaseTaxCode' => 'RecordRef',
        'rate' => 'float',
        'salesTaxCode' => 'RecordRef',
        'siteCategoryList' => 'SiteCategoryList',
        'translationsList' => 'TranslationList',
        'vendor' => 'RecordRef',
        'presentationItemList' => 'PresentationItemList',
        'hierarchyVersionsList' => 'ServiceResaleItemHierarchyVersionsList',
        'consumptionUnit' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
