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
 * SiteCategory_accounting.
 */
class SiteCategory_accounting
{
    /**
     * @var RecordRef
     */
    public $website;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var string
     */
    public $categoryDescription;

    public static $paramtypesmap = array(
        'website' => 'RecordRef',
        'category' => 'RecordRef',
        'isDefault' => 'boolean',
        'categoryDescription' => 'string',
    );
}
