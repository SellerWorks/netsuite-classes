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
 * ItemAccountMappingSearchRow.
 */
class ItemAccountMappingSearchRow extends SearchRow
{
    /**
     * @var ItemAccountMappingSearchRowBasic
     */
    public $basic;
    /**
     * @var ClassificationSearchRowBasic
     */
    public $classJoin;
    /**
     * @var DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var AccountSearchRowBasic
     */
    public $destinationAccountJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var AccountSearchRowBasic
     */
    public $sourceAccountJoin;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ItemAccountMappingSearchRowBasic',
        'classJoin' => 'ClassificationSearchRowBasic',
        'departmentJoin' => 'DepartmentSearchRowBasic',
        'destinationAccountJoin' => 'AccountSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'sourceAccountJoin' => 'AccountSearchRowBasic',
        'subsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
