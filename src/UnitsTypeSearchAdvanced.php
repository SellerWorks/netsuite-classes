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
 * UnitsTypeSearchAdvanced
 */
class UnitsTypeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var UnitsTypeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var UnitsTypeSearchRow
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
		"criteria" => "UnitsTypeSearch",
		"columns" => "UnitsTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
