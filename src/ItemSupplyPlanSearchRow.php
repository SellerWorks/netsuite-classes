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
 * ItemSupplyPlanSearchRow.
 */
class ItemSupplyPlanSearchRow extends SearchRow
{
    /**
     * @var ItemSupplyPlanSearchRowBasic
     */
    public $basic;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ItemSupplyPlanSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
