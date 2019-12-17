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
 * OtherNameCategorySearchAdvanced.
 */
class OtherNameCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var OtherNameCategorySearch
     */
    public $criteria;
    /**
     * @var OtherNameCategorySearchRow
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
        'criteria' => 'OtherNameCategorySearch',
        'columns' => 'OtherNameCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
