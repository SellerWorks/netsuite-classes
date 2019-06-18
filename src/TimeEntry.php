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
 * TimeEntry.
 */
class TimeEntry extends Record
{
    /**
     * @var Duration
     */
    public $hours;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $caseTaskEvent;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var bool
     */
    public $paidExternally;
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
     * @var string
     */
    public $memo;
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
     * @var string
     */
    public $billingClass;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var TimeBillTimeType
     */
    public $timeType;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'hours' => 'Duration',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customer' => 'RecordRef',
        'caseTaskEvent' => 'RecordRef',
        'item' => 'RecordRef',
        'isBillable' => 'boolean',
        'payrollItem' => 'RecordRef',
        'paidExternally' => 'boolean',
        'price' => 'RecordRef',
        'rate' => 'float',
        'overrideRate' => 'boolean',
        'memo' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'billingClass' => 'string',
        'subsidiary' => 'RecordRef',
        'approvalStatus' => 'RecordRef',
        'timeType' => 'TimeBillTimeType',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
