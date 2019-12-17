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
 * SiteCategorySearchAdvanced.
 */
class SiteCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var SiteCategorySearch
     */
    public $criteria;
    /**
     * @var SiteCategorySearchRow
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
        'criteria' => 'SiteCategorySearch',
        'columns' => 'SiteCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
