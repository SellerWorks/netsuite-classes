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
 * SiteCategory.
 */
class SiteCategory extends Record
{
    /**
     * @var RecordRef
     */
    public $website;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var RecordRef
     */
    public $parentCategory;
    /**
     * @var RecordRef
     */
    public $categoryListLayout;
    /**
     * @var RecordRef
     */
    public $itemListLayout;
    /**
     * @var RecordRef
     */
    public $relatedItemsListLayout;
    /**
     * @var RecordRef
     */
    public $correlatedItemsListLayout;
    /**
     * @var bool
     */
    public $isOnline;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $storeDetailedDescription;
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
     * @var string
     */
    public $urlComponent;
    /**
     * @var SitemapPriority
     */
    public $sitemapPriority;
    /**
     * @var string
     */
    public $searchKeywords;
    /**
     * @var SiteCategoryPresentationItemList
     */
    public $presentationItemList;
    /**
     * @var SiteCategoryTranslationList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'website' => 'RecordRef',
        'itemId' => 'string',
        'parentCategory' => 'RecordRef',
        'categoryListLayout' => 'RecordRef',
        'itemListLayout' => 'RecordRef',
        'relatedItemsListLayout' => 'RecordRef',
        'correlatedItemsListLayout' => 'RecordRef',
        'isOnline' => 'boolean',
        'isInactive' => 'boolean',
        'description' => 'string',
        'storeDetailedDescription' => 'string',
        'storeDisplayThumbnail' => 'RecordRef',
        'storeDisplayImage' => 'RecordRef',
        'pageTitle' => 'string',
        'metaTagHtml' => 'string',
        'excludeFromSitemap' => 'boolean',
        'urlComponent' => 'string',
        'sitemapPriority' => 'SitemapPriority',
        'searchKeywords' => 'string',
        'presentationItemList' => 'SiteCategoryPresentationItemList',
        'translationsList' => 'SiteCategoryTranslationList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
