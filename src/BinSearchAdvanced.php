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
 * BinSearchAdvanced
 */
class BinSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var BinSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var BinSearchRow
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
		"criteria" => "BinSearch",
		"columns" => "BinSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
