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
 * FolderSearchRow
 */
class FolderSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var FolderSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FolderSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}
