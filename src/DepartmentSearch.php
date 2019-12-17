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
 * DepartmentSearch.
 */
class DepartmentSearch extends SearchRecord
{
    /**
     * @var DepartmentSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'DepartmentSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
