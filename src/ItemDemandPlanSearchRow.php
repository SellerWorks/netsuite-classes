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
 * ItemDemandPlanSearchRow.
 */
class ItemDemandPlanSearchRow extends SearchRow
{
    /**
     * @var ItemDemandPlanSearchRowBasic
     */
    public $basic;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $lastAlternateSourceItemJoin;
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

    public static $paramtypesmap = array(
        'basic' => 'ItemDemandPlanSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'lastAlternateSourceItemJoin' => 'ItemSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
