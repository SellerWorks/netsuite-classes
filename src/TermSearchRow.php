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
 * TermSearchRow
 */
class TermSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TermSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "TermSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}
