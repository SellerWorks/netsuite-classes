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
 * FolderSearch
 */
class FolderSearch extends SearchRecord {
	/**
	 * @access public
	 * @var FolderSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "FolderSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
