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
 * TimeEntrySearchAdvanced
 */
class TimeEntrySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TimeEntrySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TimeEntrySearchRow
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
		"criteria" => "TimeEntrySearch",
		"columns" => "TimeEntrySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
