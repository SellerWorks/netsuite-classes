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
 * DepartmentSearchAdvanced
 */
class DepartmentSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var DepartmentSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var DepartmentSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "DepartmentSearch",
		"columns" => "DepartmentSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
