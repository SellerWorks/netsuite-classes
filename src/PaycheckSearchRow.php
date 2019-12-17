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
 * PaycheckSearchRow.
 */
class PaycheckSearchRow extends SearchRow
{
    /**
     * @var PaycheckSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var PayrollItemSearchRowBasic
     */
    public $payrollItemJoin;

    public static $paramtypesmap = [
        'basic' => 'PaycheckSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'payrollItemJoin' => 'PayrollItemSearchRowBasic',
    ];
}
