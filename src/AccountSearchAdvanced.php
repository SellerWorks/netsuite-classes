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
 * AccountSearchAdvanced
 */
class AccountSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AccountSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AccountSearchRow
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
		"criteria" => "AccountSearch",
		"columns" => "AccountSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
