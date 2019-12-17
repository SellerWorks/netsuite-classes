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
 * DepartmentSearchAdvanced.
 */
class DepartmentSearchAdvanced extends SearchRecord
{
    /**
     * @var DepartmentSearch
     */
    public $criteria;
    /**
     * @var DepartmentSearchRow
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
        'criteria' => 'DepartmentSearch',
        'columns' => 'DepartmentSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
