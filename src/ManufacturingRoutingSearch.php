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
 * ManufacturingRoutingSearch.
 */
class ManufacturingRoutingSearch extends SearchRecord
{
    /**
     * @var ManufacturingRoutingSearchBasic
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
     * @var ManufacturingCostTemplateSearchBasic
     */
    public $manufacturingCostTemplateJoin;
    /**
     * @var EntityGroupSearchBasic
     */
    public $manufacturingWorkCenterJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ManufacturingRoutingSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'manufacturingCostTemplateJoin' => 'ManufacturingCostTemplateSearchBasic',
        'manufacturingWorkCenterJoin' => 'EntityGroupSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
