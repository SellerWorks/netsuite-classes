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
 * SolutionSearch
 */
class SolutionSearch extends SearchRecord {
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $relatedSolutionJoin;
	/**
	 * @access public
	 * @var TopicSearchBasic
	 */
	public $topicJoin;
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

	static $paramtypesmap = array(
		"basic" => "SolutionSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"relatedSolutionJoin" => "SolutionSearchBasic",
		"topicJoin" => "TopicSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
