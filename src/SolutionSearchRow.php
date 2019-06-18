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
 * SolutionSearchRow.
 */
class SolutionSearchRow extends SearchRow
{
    /**
     * @var SolutionSearchRowBasic
     */
    public $basic;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var SolutionSearchRowBasic
     */
    public $relatedSolutionJoin;
    /**
     * @var TopicSearchRowBasic
     */
    public $topicJoin;
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
        'basic' => 'SolutionSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'relatedSolutionJoin' => 'SolutionSearchRowBasic',
        'topicJoin' => 'TopicSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
