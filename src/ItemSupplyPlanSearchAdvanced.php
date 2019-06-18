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
 * ItemSupplyPlanSearchAdvanced.
 */
class ItemSupplyPlanSearchAdvanced extends SearchRecord
{
    /**
     * @var ItemSupplyPlanSearch
     */
    public $criteria;
    /**
     * @var ItemSupplyPlanSearchRow
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
        'criteria' => 'ItemSupplyPlanSearch',
        'columns' => 'ItemSupplyPlanSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
