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
 * FileSearchRow
 */
class FileSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $shopperJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FileSearchRowBasic",
		"shopperJoin" => "CustomerSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}
