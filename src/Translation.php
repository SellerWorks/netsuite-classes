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
 * Translation.
 */
class Translation
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
    public $salesDescription;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var string
     */
    public $storeDescription;
    /**
     * @var string
     */
    public $storeDetailedDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $pageTitle;
    /**
     * @var string
     */
    public $noPriceMessage;
    /**
     * @var string
     */
    public $outOfStockMessage;

    public static $paramtypesmap = array(
        'locale' => 'Language',
        'language' => 'string',
        'displayName' => 'string',
        'description' => 'string',
        'salesDescription' => 'string',
        'storeDisplayName' => 'string',
        'storeDescription' => 'string',
        'storeDetailedDescription' => 'string',
        'featuredDescription' => 'string',
        'specialsDescription' => 'string',
        'pageTitle' => 'string',
        'noPriceMessage' => 'string',
        'outOfStockMessage' => 'string',
    );
}
