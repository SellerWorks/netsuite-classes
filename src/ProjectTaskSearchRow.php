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
 * ProjectTaskSearchRow.
 */
class ProjectTaskSearchRow extends SearchRow
{
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $basic;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $predecessorJoin;
    /**
     * @var ProjectTaskAssignmentSearchRowBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $successorJoin;
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
        'basic' => 'ProjectTaskSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'predecessorJoin' => 'ProjectTaskSearchRowBasic',
        'projectTaskAssignmentJoin' => 'ProjectTaskAssignmentSearchRowBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchRowBasic',
        'successorJoin' => 'ProjectTaskSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
