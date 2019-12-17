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
 * TimeBillSearchAdvanced
 */
class TimeBillSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TimeBillSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TimeBillSearchRow
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
		"criteria" => "TimeBillSearch",
		"columns" => "TimeBillSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
