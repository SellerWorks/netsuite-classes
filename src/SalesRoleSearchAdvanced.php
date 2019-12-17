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
 * SalesRoleSearchAdvanced
 */
class SalesRoleSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SalesRoleSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SalesRoleSearchRow
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
		"criteria" => "SalesRoleSearch",
		"columns" => "SalesRoleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
