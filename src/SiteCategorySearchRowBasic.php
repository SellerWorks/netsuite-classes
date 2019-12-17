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
 * SiteCategorySearchRowBasic.
 */
class SiteCategorySearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDateField[]
     */
    public $dateViewed;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $excludeFromSitemap;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fullName;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $hidden;
    /**
     * @var SearchColumnLongField[]
     */
    public $hits;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $longDescription;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $pageTitle;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $sitemapPriority;
    /**
     * @var SearchColumnStringField[]
     */
    public $urlComponent;

    public static $paramtypesmap = [
        'dateViewed' => 'SearchColumnDateField[]',
        'description' => 'SearchColumnStringField[]',
        'excludeFromSitemap' => 'SearchColumnBooleanField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fullName' => 'SearchColumnStringField[]',
        'hidden' => 'SearchColumnBooleanField[]',
        'hits' => 'SearchColumnLongField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'longDescription' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'pageTitle' => 'SearchColumnStringField[]',
        'sitemapPriority' => 'SearchColumnEnumSelectField[]',
        'urlComponent' => 'SearchColumnStringField[]',
    ];
}
