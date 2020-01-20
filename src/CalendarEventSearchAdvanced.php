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
 * CalendarEventSearchAdvanced
 */
class CalendarEventSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CalendarEventSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CalendarEventSearchRow
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
		"criteria" => "CalendarEventSearch",
		"columns" => "CalendarEventSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
