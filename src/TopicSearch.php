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
 * TopicSearch.
 */
class TopicSearch extends SearchRecord
{
    /**
     * @var TopicSearchBasic
     */
    public $basic;
    /**
     * @var SolutionSearchBasic
     */
    public $solutionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'TopicSearchBasic',
        'solutionJoin' => 'SolutionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    ];
}
