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
 * TaskSearchRow.
 */
class TaskSearchRow extends SearchRow
{
    /**
     * @var TaskSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $assignedJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $companyCustomerJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
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
        'basic' => 'TaskSearchRowBasic',
        'assignedJoin' => 'EmployeeSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'companyCustomerJoin' => 'CustomerSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
