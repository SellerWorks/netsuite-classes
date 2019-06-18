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
 * ExpenseCategorySearchAdvanced.
 */
class ExpenseCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var ExpenseCategorySearch
     */
    public $criteria;
    /**
     * @var ExpenseCategorySearchRow
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
        'criteria' => 'ExpenseCategorySearch',
        'columns' => 'ExpenseCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
