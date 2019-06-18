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
 * TaskSearch.
 */
class TaskSearch extends SearchRecord
{
    /**
     * @var TaskSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $assignedJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $companyCustomerJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
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
        'basic' => 'TaskSearchBasic',
        'assignedJoin' => 'EmployeeSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'companyCustomerJoin' => 'CustomerSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
