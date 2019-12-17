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
 * CustomerCategorySearchAdvanced.
 */
class CustomerCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var CustomerCategorySearch
     */
    public $criteria;
    /**
     * @var CustomerCategorySearchRow
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
        'criteria' => 'CustomerCategorySearch',
        'columns' => 'CustomerCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
