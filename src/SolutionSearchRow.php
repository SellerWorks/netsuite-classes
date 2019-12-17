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
 * SolutionSearchRow
 */
class SolutionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var SolutionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var SolutionSearchRowBasic
	 */
	public $relatedSolutionJoin;
	/**
	 * @access public
	 * @var TopicSearchRowBasic
	 */
	public $topicJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "SolutionSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"relatedSolutionJoin" => "SolutionSearchRowBasic",
		"topicJoin" => "TopicSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
