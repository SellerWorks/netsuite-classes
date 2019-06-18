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
 * BillingSchedule.
 */
class BillingSchedule extends Record
{
    /**
     * @var BillingScheduleType
     */
    public $scheduleType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var BillingScheduleRecurrencePattern
     */
    public $recurrencePattern;
    /**
     * @var RecordRef
     */
    public $project;
    /**
     * @var string
     */
    public $initialAmount;
    /**
     * @var RecordRef
     */
    public $initialTerms;
    /**
     * @var BillingScheduleFrequency
     */
    public $frequency;
    /**
     * @var RecurrenceDowMaskList
     */
    public $recurrenceDowMaskList;
    /**
     * @var BillingScheduleRecurrenceMode
     */
    public $yearMode;
    /**
     * @var BillingScheduleYearDowim
     */
    public $yearDowim;
    /**
     * @var BillingScheduleYearDow
     */
    public $yearDow;
    /**
     * @var BillingScheduleYearDowimMonth
     */
    public $yearDowimMonth;
    /**
     * @var BillingScheduleYearMonth
     */
    public $yearMonth;
    /**
     * @var int
     */
    public $yearDom;
    /**
     * @var BillingScheduleRecurrenceMode
     */
    public $monthMode;
    /**
     * @var BillingScheduleMonthDowim
     */
    public $monthDowim;
    /**
     * @var BillingScheduleMonthDow
     */
    public $monthDow;
    /**
     * @var int
     */
    public $monthDom;
    /**
     * @var int
     */
    public $dayPeriod;
    /**
     * @var BillingScheduleRepeatEvery
     */
    public $repeatEvery;
    /**
     * @var bool
     */
    public $billForActuals;
    /**
     * @var int
     */
    public $numberRemaining;
    /**
     * @var bool
     */
    public $inArrears;
    /**
     * @var RecordRef
     */
    public $recurrenceTerms;
    /**
     * @var bool
     */
    public $isPublic;
    /**
     * @var bool
     */
    public $applyToSubtotal;
    /**
     * @var RecordRef
     */
    public $transaction;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var dateTime
     */
    public $seriesStartDate;
    /**
     * @var BillingScheduleRecurrenceList
     */
    public $recurrenceList;
    /**
     * @var BillingScheduleMilestoneList
     */
    public $milestoneList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'scheduleType' => 'BillingScheduleType',
        'name' => 'string',
        'recurrencePattern' => 'BillingScheduleRecurrencePattern',
        'project' => 'RecordRef',
        'initialAmount' => 'string',
        'initialTerms' => 'RecordRef',
        'frequency' => 'BillingScheduleFrequency',
        'recurrenceDowMaskList' => 'RecurrenceDowMaskList',
        'yearMode' => 'BillingScheduleRecurrenceMode',
        'yearDowim' => 'BillingScheduleYearDowim',
        'yearDow' => 'BillingScheduleYearDow',
        'yearDowimMonth' => 'BillingScheduleYearDowimMonth',
        'yearMonth' => 'BillingScheduleYearMonth',
        'yearDom' => 'integer',
        'monthMode' => 'BillingScheduleRecurrenceMode',
        'monthDowim' => 'BillingScheduleMonthDowim',
        'monthDow' => 'BillingScheduleMonthDow',
        'monthDom' => 'integer',
        'dayPeriod' => 'integer',
        'repeatEvery' => 'BillingScheduleRepeatEvery',
        'billForActuals' => 'boolean',
        'numberRemaining' => 'integer',
        'inArrears' => 'boolean',
        'recurrenceTerms' => 'RecordRef',
        'isPublic' => 'boolean',
        'applyToSubtotal' => 'boolean',
        'transaction' => 'RecordRef',
        'isInactive' => 'boolean',
        'seriesStartDate' => 'dateTime',
        'recurrenceList' => 'BillingScheduleRecurrenceList',
        'milestoneList' => 'BillingScheduleMilestoneList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
