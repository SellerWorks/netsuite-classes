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
 * ManufacturingCostTemplateSearchRow.
 */
class ManufacturingCostTemplateSearchRow extends SearchRow
{
    /**
     * @var ManufacturingCostTemplateSearchRowBasic
     */
    public $basic;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ManufacturingCostTemplateSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
