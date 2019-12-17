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
 * PaycheckSearch
 */
class PaycheckSearch extends SearchRecord
{
    /**
     * @access public
     * @var PaycheckSearchBasic
     */
    public $basic;
    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @access public
     * @var PayrollItemSearchBasic
     */
    public $payrollItemJoin;

    public static $paramtypesmap = array(
        "basic" => "PaycheckSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "payrollItemJoin" => "PayrollItemSearchBasic",
    );
}
