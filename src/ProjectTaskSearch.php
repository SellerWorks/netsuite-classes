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
 * ProjectTaskSearch.
 */
class ProjectTaskSearch extends SearchRecord
{
    /**
     * @var ProjectTaskSearchBasic
     */
    public $basic;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var ProjectTaskSearchBasic
     */
    public $predecessorJoin;
    /**
     * @var ProjectTaskAssignmentSearchBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var ProjectTaskSearchBasic
     */
    public $successorJoin;
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

    public static $paramtypesmap = [
        'basic' => 'ProjectTaskSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'predecessorJoin' => 'ProjectTaskSearchBasic',
        'projectTaskAssignmentJoin' => 'ProjectTaskAssignmentSearchBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchBasic',
        'successorJoin' => 'ProjectTaskSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
