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
 * FileSiteCategory.
 */
class FileSiteCategory
{
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var string
     */
    public $categoryDescription;
    /**
     * @var RecordRef
     */
    public $website;

    public static $paramtypesmap = [
        'isDefault' => 'boolean',
        'category' => 'RecordRef',
        'categoryDescription' => 'string',
        'website' => 'RecordRef',
    ];
}
