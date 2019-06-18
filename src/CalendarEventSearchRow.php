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
 * CalendarEventSearchRow.
 */
class CalendarEventSearchRow extends SearchRow
{
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $basic;
    /**
     * @var EntitySearchRowBasic
     */
    public $attendeeJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $attendeeContactJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $attendeeCustomerJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'CalendarEventSearchRowBasic',
        'attendeeJoin' => 'EntitySearchRowBasic',
        'attendeeContactJoin' => 'ContactSearchRowBasic',
        'attendeeCustomerJoin' => 'CustomerSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
