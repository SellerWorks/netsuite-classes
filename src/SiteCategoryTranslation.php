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
 * SiteCategoryTranslation.
 */
class SiteCategoryTranslation
{
    /**
     * @var Language
     */
    public $locale;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $storeDetailedDescription;
    /**
     * @var string
     */
    public $pageTitle;

    public static $paramtypesmap = [
        'locale' => 'Language',
        'language' => 'string',
        'displayName' => 'string',
        'description' => 'string',
        'storeDetailedDescription' => 'string',
        'pageTitle' => 'string',
    ];
}
