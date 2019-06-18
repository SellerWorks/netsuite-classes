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
 * SalesRoleSearchAdvanced.
 */
class SalesRoleSearchAdvanced extends SearchRecord
{
    /**
     * @var SalesRoleSearch
     */
    public $criteria;
    /**
     * @var SalesRoleSearchRow
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
        'criteria' => 'SalesRoleSearch',
        'columns' => 'SalesRoleSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
