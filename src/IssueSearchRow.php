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
 * IssueSearchRow.
 */
class IssueSearchRow extends SearchRow
{
    /**
     * @var IssueSearchRowBasic
     */
    public $basic;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var EntityGroupSearchRowBasic
     */
    public $productTeamJoin;
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

    public static $paramtypesmap = array(
        'basic' => 'IssueSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'productTeamJoin' => 'EntityGroupSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
