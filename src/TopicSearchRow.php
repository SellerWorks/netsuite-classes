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
 * TopicSearchRow.
 */
class TopicSearchRow extends SearchRow
{
    /**
     * @var TopicSearchRowBasic
     */
    public $basic;
    /**
     * @var SolutionSearchRowBasic
     */
    public $solutionJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'TopicSearchRowBasic',
        'solutionJoin' => 'SolutionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
