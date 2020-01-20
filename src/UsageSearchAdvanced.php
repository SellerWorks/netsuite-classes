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
 * UsageSearchAdvanced
 */
class UsageSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var UsageSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var UsageSearchRow
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
		"criteria" => "UsageSearch",
		"columns" => "UsageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
