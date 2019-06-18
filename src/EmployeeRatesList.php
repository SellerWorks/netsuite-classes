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
 * EmployeeRatesList.
 */
class EmployeeRatesList
{
    /**
     * @var EmployeeRates[]
     */
    public $employeeRates;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'employeeRates' => 'EmployeeRates[]',
        'replaceAll' => 'boolean',
    );
}
