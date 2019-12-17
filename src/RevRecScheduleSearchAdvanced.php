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
 * RevRecScheduleSearchAdvanced
 */
class RevRecScheduleSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var RevRecScheduleSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var RevRecScheduleSearchRow
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
		"criteria" => "RevRecScheduleSearch",
		"columns" => "RevRecScheduleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
