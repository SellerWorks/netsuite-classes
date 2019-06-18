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
 * EmployeeDeduction.
 */
class EmployeeDeduction
{
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $limit;
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
        'rate' => 'string',
        'limit' => 'float',
        'inactive' => 'boolean',
        'effectiveDate' => 'dateTime',
        'expirationDate' => 'dateTime',
    );
}
