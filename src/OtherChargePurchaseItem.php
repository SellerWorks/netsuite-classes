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
 * OtherChargePurchaseItem.
 */
class OtherChargePurchaseItem extends Record
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
    public $unitsType;
    /**
     * @var RecordRef
     */
    public $purchaseUnit;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $issueProduct;
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
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
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
     * @var int
     */
    public $amortizationPeriod;
    /**
     * @var bool
     */
    public $isFulfillable;
    /**
     * @var bool
     */
    public $generateAccruals;
    /**
     * @var ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var RecordRef
     */
    public $costCategory;
    /**
     * @var ItemOverheadType
     */
    public $overheadType;
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
     * @var RecordRef
     */
    public $purchaseTaxCode;
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'purchaseDescription' => 'string',
        'manufacturingChargeItem' => 'boolean',
        'cost' => 'float',
        'costUnits' => 'string',
        'expenseAccount' => 'RecordRef',
        'isTaxable' => 'boolean',
        'matrixType' => 'ItemMatrixType',
        'unitsType' => 'RecordRef',
        'purchaseUnit' => 'RecordRef',
        'includeChildren' => 'boolean',
        'issueProduct' => 'RecordRef',
        'customForm' => 'RecordRef',
        'itemId' => 'string',
        'upcCode' => 'string',
        'displayName' => 'string',
        'vendorName' => 'string',
        'parent' => 'RecordRef',
        'isInactive' => 'boolean',
        'matrixItemNameTemplate' => 'string',
        'availableToPartners' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'subsidiaryList' => 'RecordRefList',
        'location' => 'RecordRef',
        'taxSchedule' => 'RecordRef',
        'deferralAccount' => 'RecordRef',
        'amortizationTemplate' => 'RecordRef',
        'residual' => 'string',
        'amortizationPeriod' => 'integer',
        'isFulfillable' => 'boolean',
        'generateAccruals' => 'boolean',
        'accountingBookDetailList' => 'ItemAccountingBookDetailList',
        'costCategory' => 'RecordRef',
        'overheadType' => 'ItemOverheadType',
        'purchaseOrderQuantity' => 'float',
        'purchaseOrderAmount' => 'float',
        'purchaseOrderQuantityDiff' => 'float',
        'receiptQuantity' => 'float',
        'receiptAmount' => 'float',
        'receiptQuantityDiff' => 'float',
        'currency' => 'string',
        'itemOptionsList' => 'ItemOptionsList',
        'matrixOptionList' => 'MatrixOptionList',
        'itemVendorList' => 'ItemVendorList',
        'purchaseTaxCode' => 'RecordRef',
        'salesTaxCode' => 'RecordRef',
        'translationsList' => 'TranslationList',
        'vendor' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
