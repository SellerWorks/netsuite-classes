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
 * PriceLevelSearchAdvanced
 */
class PriceLevelSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PriceLevelSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PriceLevelSearchRow
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
		"criteria" => "PriceLevelSearch",
		"columns" => "PriceLevelSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
