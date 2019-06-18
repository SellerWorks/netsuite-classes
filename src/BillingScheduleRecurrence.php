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
 * BillingScheduleRecurrence.
 */
class BillingScheduleRecurrence
{
    /**
     * @var int
     */
    public $recurrenceId;
    /**
     * @var int
     */
    public $count;
    /**
     * @var BillingScheduleRecurrenceRecurrenceUnits
     */
    public $units;
    /**
     * @var bool
     */
    public $relativeToPrevious;
    /**
     * @var dateTime
     */
    public $recurrenceDate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $paymentTerms;

    public static $paramtypesmap = array(
        'recurrenceId' => 'integer',
        'count' => 'integer',
        'units' => 'BillingScheduleRecurrenceRecurrenceUnits',
        'relativeToPrevious' => 'boolean',
        'recurrenceDate' => 'dateTime',
        'amount' => 'float',
        'paymentTerms' => 'RecordRef',
    );
}
