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
 * CalendarEventSearch.
 */
class CalendarEventSearch extends SearchRecord
{
    /**
     * @var CalendarEventSearchBasic
     */
    public $basic;
    /**
     * @var EntitySearchBasic
     */
    public $attendeeJoin;
    /**
     * @var ContactSearchBasic
     */
    public $attendeeContactJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $attendeeCustomerJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'CalendarEventSearchBasic',
        'attendeeJoin' => 'EntitySearchBasic',
        'attendeeContactJoin' => 'ContactSearchBasic',
        'attendeeCustomerJoin' => 'CustomerSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
