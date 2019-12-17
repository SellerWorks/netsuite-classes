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
 * AccountingPeriodFiscalCalendars.
 */
class AccountingPeriodFiscalCalendars
{
    /**
     * @var RecordRef
     */
    public $fiscalCalendar;
    /**
     * @var RecordRef
     */
    public $parent;

    public static $paramtypesmap = [
        'fiscalCalendar' => 'RecordRef',
        'parent' => 'RecordRef',
    ];
}
