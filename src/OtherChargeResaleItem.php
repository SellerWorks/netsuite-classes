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
 * OtherChargeResaleItem.
 */
class OtherChargeResaleItem extends Record
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
     * @var string
     */
    public $minimumQuantityUnits;
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
     * @var RecordRefList
     */
    public $subsidiaryList;
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
     * @var string
     */
    public $currency;
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
     * @var TranslationList
     */
    public $translationsList;
    /**
     * @var RecordRef
     */
    public $vendor;
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
        'isTaxable' => 'boolean',
        'matrixType' => 'ItemMatrixType',
        'taxSchedule' => 'RecordRef',
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
        'minimumQuantityUnits' => 'string',
        'enforceMinQtyInternally' => 'boolean',
        'maximumQuantity' => 'integer',
        'softDescriptor' => 'string',
        'isFulfillable' => 'boolean',
        'generateAccruals' => 'boolean',
        'costCategory' => 'RecordRef',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'pricesIncludeTax' => 'boolean',
        'quantityPricingSchedule' => 'RecordRef',
        'useMarginalRates' => 'boolean',
        'overallQuantityPricingType' => 'ItemOverallQuantityPricingType',
        'pricingGroup' => 'RecordRef',
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
        'matrixItemNameTemplate' => 'string',
        'availableToPartners' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiaryList' => 'RecordRefList',
        'vsoePrice' => 'float',
        'vsoeSopGroup' => 'VsoeSopGroup',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'itemRevenueCategory' => 'RecordRef',
        'currency' => 'string',
        'itemOptionsList' => 'ItemOptionsList',
        'matrixOptionList' => 'MatrixOptionList',
        'itemVendorList' => 'ItemVendorList',
        'pricingMatrix' => 'PricingMatrix',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'purchaseTaxCode' => 'RecordRef',
        'rate' => 'float',
        'salesTaxCode' => 'RecordRef',
        'translationsList' => 'TranslationList',
        'vendor' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
