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
 * ItemDemandPlanSearchAdvanced.
 */
class ItemDemandPlanSearchAdvanced extends SearchRecord
{
    /**
     * @var ItemDemandPlanSearch
     */
    public $criteria;
    /**
     * @var ItemDemandPlanSearchRow
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
        'criteria' => 'ItemDemandPlanSearch',
        'columns' => 'ItemDemandPlanSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
