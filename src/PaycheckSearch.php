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
 * PaycheckSearch.
 */
class PaycheckSearch extends SearchRecord
{
    /**
     * @var PaycheckSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var PayrollItemSearchBasic
     */
    public $payrollItemJoin;

    public static $paramtypesmap = array(
        'basic' => 'PaycheckSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'payrollItemJoin' => 'PayrollItemSearchBasic',
    );
}
