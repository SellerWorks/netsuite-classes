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
 * EmployeeAccruedTime.
 */
class EmployeeAccruedTime
{
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var float
     */
    public $accruedHours;
    /**
     * @var float
     */
    public $accrualRate;
    /**
     * @var float
     */
    public $monetaryRate;
    /**
     * @var bool
     */
    public $resetAccruedHoursAtYearEnd;
    /**
     * @var EmployeeAccruedTimeAccrualMethod
     */
    public $accrualMethod;
    /**
     * @var float
     */
    public $maximumAccruedHours;
    /**
     * @var bool
     */
    public $inactive;
    /**
     * @var dateTime
     */
    public $effectiveDate;
    /**
     * @var dateTime
     */
    public $expirationDate;

    public static $paramtypesmap = array(
        'payrollItem' => 'RecordRef',
        'accruedHours' => 'float',
        'accrualRate' => 'float',
        'monetaryRate' => 'float',
        'resetAccruedHoursAtYearEnd' => 'boolean',
        'accrualMethod' => 'EmployeeAccruedTimeAccrualMethod',
        'maximumAccruedHours' => 'float',
        'inactive' => 'boolean',
        'effectiveDate' => 'dateTime',
        'expirationDate' => 'dateTime',
    );
}
