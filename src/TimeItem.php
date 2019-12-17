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
 * TimeItem.
 */
class TimeItem
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var TimeItemTimeType
     */
    public $timeType;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var RecordRef
     */
    public $temporaryStateJurisdiction;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var Duration
     */
    public $hours;
    /**
     * @var RecordRef
     */
    public $price;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var bool
     */
    public $overrideRate;
    /**
     * @var Duration
     */
    public $hoursTotal;
    /**
     * @var RecordRef
     */
    public $caseTaskEvent;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $isUtilized;
    /**
     * @var bool
     */
    public $isProductive;
    /**
     * @var bool
     */
    public $isExempt;

    public static $paramtypesmap = [
        'id' => 'integer',
        'employee' => 'RecordRef',
        'timeType' => 'TimeItemTimeType',
        'tranDate' => 'dateTime',
        'customer' => 'RecordRef',
        'isBillable' => 'boolean',
        'payrollItem' => 'RecordRef',
        'item' => 'RecordRef',
        'temporaryLocalJurisdiction' => 'RecordRef',
        'temporaryStateJurisdiction' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'hours' => 'Duration',
        'price' => 'RecordRef',
        'rate' => 'float',
        'overrideRate' => 'boolean',
        'hoursTotal' => 'Duration',
        'caseTaskEvent' => 'RecordRef',
        'memo' => 'string',
        'isUtilized' => 'boolean',
        'isProductive' => 'boolean',
        'isExempt' => 'boolean',
    ];
}
