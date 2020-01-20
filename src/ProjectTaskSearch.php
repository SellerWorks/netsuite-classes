<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * ProjectTaskSearch
 */
class ProjectTaskSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var ProjectTaskAssignmentSearchBasic
	 */
	public $projectTaskAssignmentJoin;
	/**
	 * @access public
	 * @var ResourceAllocationSearchBasic
	 */
	public $resourceAllocationJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchBasic
	 */
	public $successorJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
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
		"basic" => "ProjectTaskSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"predecessorJoin" => "ProjectTaskSearchBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"successorJoin" => "ProjectTaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
