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
 * DepartmentSearchRow
 */
class DepartmentSearchRow extends SearchRow
{
    /**
     * @access public
     * @var DepartmentSearchRowBasic
     */
    public $basic;
    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        "basic" => "DepartmentSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
