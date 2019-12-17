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
 * SiteCategorySearchBasic.
 */
class SiteCategorySearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDateField
     */
    public $dateViewed;
    /**
     * @var SearchStringField
     */
    public $description;
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
    public $name;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $sitemapPriority;

    public static $paramtypesmap = [
        'dateViewed' => 'SearchDateField',
        'description' => 'SearchStringField',
        'excludeFromSitemap' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'name' => 'SearchMultiSelectField',
        'sitemapPriority' => 'SearchEnumMultiSelectField',
    ];
}
