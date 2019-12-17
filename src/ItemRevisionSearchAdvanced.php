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
 * ItemRevisionSearchAdvanced
 */
class ItemRevisionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ItemRevisionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ItemRevisionSearchRow
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
		"criteria" => "ItemRevisionSearch",
		"columns" => "ItemRevisionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
