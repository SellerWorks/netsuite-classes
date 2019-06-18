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
 * CostCategorySearchAdvanced.
 */
class CostCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var CostCategorySearch
     */
    public $criteria;
    /**
     * @var CostCategorySearchRow
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

    public static $paramtypesmap = array(
        'criteria' => 'CostCategorySearch',
        'columns' => 'CostCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
