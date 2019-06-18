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
 * ManufacturingRoutingSearchRow.
 */
class ManufacturingRoutingSearchRow extends SearchRow
{
    /**
     * @var ManufacturingRoutingSearchRowBasic
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
     * @var ManufacturingCostTemplateSearchRowBasic
     */
    public $manufacturingCostTemplateJoin;
    /**
     * @var EntityGroupSearchRowBasic
     */
    public $manufacturingWorkCenterJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ManufacturingRoutingSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'manufacturingCostTemplateJoin' => 'ManufacturingCostTemplateSearchRowBasic',
        'manufacturingWorkCenterJoin' => 'EntityGroupSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
