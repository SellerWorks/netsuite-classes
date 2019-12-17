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
 * EmployeeEarning.
 */
class EmployeeEarning
{
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var string
     */
    public $payRate;
    /**
     * @var bool
     */
    public $primaryEarning;
    /**
     * @var float
     */
    public $defaultHours;
    /**
     * @var bool
     */
    public $inactive;
    /**
     * @var bool
     */
    public $defaultEarning;
    /**
     * @var dateTime
     */
    public $effectiveDate;
    /**
     * @var dateTime
     */
    public $expirationDate;

    public static $paramtypesmap = [
        'payrollItem' => 'RecordRef',
        'payRate' => 'string',
        'primaryEarning' => 'boolean',
        'defaultHours' => 'float',
        'inactive' => 'boolean',
        'defaultEarning' => 'boolean',
        'effectiveDate' => 'dateTime',
        'expirationDate' => 'dateTime',
    ];
}
