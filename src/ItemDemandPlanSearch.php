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
 * ItemDemandPlanSearch.
 */
class ItemDemandPlanSearch extends SearchRecord
{
    /**
     * @var ItemDemandPlanSearchBasic
     */
    public $basic;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var ItemSearchBasic
     */
    public $lastAlternateSourceItemJoin;
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
        'basic' => 'ItemDemandPlanSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'lastAlternateSourceItemJoin' => 'ItemSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
