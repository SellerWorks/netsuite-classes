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
 * ItemSearchAdvanced
 */
class ItemSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ItemSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ItemSearchRow
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
		"criteria" => "ItemSearch",
		"columns" => "ItemSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
