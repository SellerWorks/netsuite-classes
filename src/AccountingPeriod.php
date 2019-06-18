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
 * AccountingPeriod.
 */
class AccountingPeriod extends Record
{
    /**
     * @var string
     */
    public $periodName;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var RecordRef
     */
    public $fiscalCalendar;
    /**
     * @var dateTime
     */
    public $closedOnDate;
    /**
     * @var bool
     */
    public $isAdjust;
    /**
     * @var AccountingPeriodFiscalCalendarsList
     */
    public $fiscalCalendarsList;
    /**
     * @var bool
     */
    public $isQuarter;
    /**
     * @var bool
     */
    public $isYear;
    /**
     * @var bool
     */
    public $closed;
    /**
     * @var bool
     */
    public $apLocked;
    /**
     * @var bool
     */
    public $arLocked;
    /**
     * @var bool
     */
    public $payrollLocked;
    /**
     * @var bool
     */
    public $allLocked;
    /**
     * @var bool
     */
    public $allowNonGLChanges;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'periodName' => 'string',
        'parent' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'fiscalCalendar' => 'RecordRef',
        'closedOnDate' => 'dateTime',
        'isAdjust' => 'boolean',
        'fiscalCalendarsList' => 'AccountingPeriodFiscalCalendarsList',
        'isQuarter' => 'boolean',
        'isYear' => 'boolean',
        'closed' => 'boolean',
        'apLocked' => 'boolean',
        'arLocked' => 'boolean',
        'payrollLocked' => 'boolean',
        'allLocked' => 'boolean',
        'allowNonGLChanges' => 'boolean',
        'internalId' => 'string',
    ];
}
