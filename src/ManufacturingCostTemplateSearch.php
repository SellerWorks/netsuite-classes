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
 * ManufacturingCostTemplateSearch.
 */
class ManufacturingCostTemplateSearch extends SearchRecord
{
    /**
     * @var ManufacturingCostTemplateSearchBasic
     */
    public $basic;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ManufacturingCostTemplateSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
