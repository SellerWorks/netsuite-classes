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
 * IssueSearch.
 */
class IssueSearch extends SearchRecord
{
    /**
     * @var IssueSearchBasic
     */
    public $basic;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var EntityGroupSearchBasic
     */
    public $productTeamJoin;
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
        'basic' => 'IssueSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'productTeamJoin' => 'EntityGroupSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
