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
 * GlobalAccountMappingSearch.
 */
class GlobalAccountMappingSearch extends SearchRecord
{
    /**
     * @var GlobalAccountMappingSearchBasic
     */
    public $basic;
    /**
     * @var ClassificationSearchBasic
     */
    public $classJoin;
    /**
     * @var DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var AccountSearchBasic
     */
    public $destinationAccountJoin;
    /**
     * @var LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var AccountSearchBasic
     */
    public $sourceAccountJoin;
    /**
     * @var SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'GlobalAccountMappingSearchBasic',
        'classJoin' => 'ClassificationSearchBasic',
        'departmentJoin' => 'DepartmentSearchBasic',
        'destinationAccountJoin' => 'AccountSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'sourceAccountJoin' => 'AccountSearchBasic',
        'subsidiaryJoin' => 'SubsidiarySearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
