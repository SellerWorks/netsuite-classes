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
 * VendorCategorySearchAdvanced.
 */
class VendorCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var VendorCategorySearch
     */
    public $criteria;
    /**
     * @var VendorCategorySearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = [
        'criteria' => 'VendorCategorySearch',
        'columns' => 'VendorCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
