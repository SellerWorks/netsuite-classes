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
 * SolutionSearch.
 */
class SolutionSearch extends SearchRecord
{
    /**
     * @var SolutionSearchBasic
     */
    public $basic;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var SolutionSearchBasic
     */
    public $relatedSolutionJoin;
    /**
     * @var TopicSearchBasic
     */
    public $topicJoin;
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
        'basic' => 'SolutionSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'relatedSolutionJoin' => 'SolutionSearchBasic',
        'topicJoin' => 'TopicSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
