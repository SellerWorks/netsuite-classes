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
 * UnitsTypeSearchAdvanced.
 */
class UnitsTypeSearchAdvanced extends SearchRecord
{
    /**
     * @var UnitsTypeSearch
     */
    public $criteria;
    /**
     * @var UnitsTypeSearchRow
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
        'criteria' => 'UnitsTypeSearch',
        'columns' => 'UnitsTypeSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
