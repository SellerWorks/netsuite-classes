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
 * WinLossReasonSearchAdvanced
 */
class WinLossReasonSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var WinLossReasonSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var WinLossReasonSearchRow
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
		"criteria" => "WinLossReasonSearch",
		"columns" => "WinLossReasonSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
