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
 * AccountingPeriodSearchAdvanced
 */
class AccountingPeriodSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AccountingPeriodSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AccountingPeriodSearchRow
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
		"criteria" => "AccountingPeriodSearch",
		"columns" => "AccountingPeriodSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
