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
 * ItemSupplyPlanSearch.
 */
class ItemSupplyPlanSearch extends SearchRecord
{
    /**
     * @var ItemSupplyPlanSearchBasic
     */
    public $basic;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ItemSupplyPlanSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
