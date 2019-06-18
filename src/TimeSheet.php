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
 * TimeSheet.
 */
class TimeSheet extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var Duration
     */
    public $totalHours;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var TimeSheetTimeGridList
     */
    public $timeGridList;
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
        'customForm' => 'RecordRef',
        'employee' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'totalHours' => 'Duration',
        'approvalStatus' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'timeGridList' => 'TimeSheetTimeGridList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
