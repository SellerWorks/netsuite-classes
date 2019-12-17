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
 * BillingScheduleSearchAdvanced
 */
class BillingScheduleSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var BillingScheduleSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var BillingScheduleSearchRow
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
		"criteria" => "BillingScheduleSearch",
		"columns" => "BillingScheduleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
