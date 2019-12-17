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
 * TaskSearch
 */
class TaskSearch extends SearchRecord
{
    /**
     * @access public
     * @var TaskSearchBasic
     */
    public $basic;
    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $assignedJoin;
    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @access public
     * @var CustomerSearchBasic
     */
    public $companyCustomerJoin;
    /**
     * @access public
     * @var ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @access public
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @access public
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @access public
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @access public
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @access public
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @access public
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @access public
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        "basic" => "TaskSearchBasic",
        "assignedJoin" => "EmployeeSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "companyCustomerJoin" => "CustomerSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
