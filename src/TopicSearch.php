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
 * TopicSearch
 */
class TopicSearch extends SearchRecord {
	/**
	 * @access public
	 * @var TopicSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SolutionSearchBasic
	 */
	public $solutionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "TopicSearchBasic",
		"solutionJoin" => "SolutionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
