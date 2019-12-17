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
 * GiftCertificateItem.
 */
class GiftCertificateItem extends Record
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
     * @var bool
     */
    public $includeChildren;
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
    public $salesDescription;
    /**
     * @var RecordRef
     */
    public $incomeAccount;
    /**
     * @var RecordRef
     */
    public $liabilityAccount;
    /**
     * @var int
     */
    public $daysBeforeExpiration;
    /**
     * @var bool
     */
    public $isTaxable;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var RecordRef
     */
    public $salesTaxCode;
    /**
     * @var bool
     */
    public $pricesIncludeTax;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var RecordRef
     */
    public $issueProduct;
    /**
     * @var bool
     */
    public $isFulfillable;
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
    public $specialsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var GiftCertificateItemAuthCodesList
     */
    public $authCodesList;
    /**
     * @var SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var TranslationList
     */
    public $translationsList;
    /**
     * @var ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var PresentationItemList
     */
    public $presentationItemList;
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
        'includeChildren' => 'boolean',
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
        'salesDescription' => 'string',
        'incomeAccount' => 'RecordRef',
        'liabilityAccount' => 'RecordRef',
        'daysBeforeExpiration' => 'integer',
        'isTaxable' => 'boolean',
        'rate' => 'float',
        'urlComponent' => 'string',
        'salesTaxCode' => 'RecordRef',
        'pricesIncludeTax' => 'boolean',
        'taxSchedule' => 'RecordRef',
        'costEstimate' => 'float',
        'costEstimateType' => 'ItemCostEstimateType',
        'billingSchedule' => 'RecordRef',
        'issueProduct' => 'RecordRef',
        'isFulfillable' => 'boolean',
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
        'specialsDescription' => 'string',
        'featuredDescription' => 'string',
        'relatedItemsDescription' => 'string',
        'pricingMatrix' => 'PricingMatrix',
        'authCodesList' => 'GiftCertificateItemAuthCodesList',
        'siteCategoryList' => 'SiteCategoryList',
        'translationsList' => 'TranslationList',
        'itemOptionsList' => 'ItemOptionsList',
        'presentationItemList' => 'PresentationItemList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
