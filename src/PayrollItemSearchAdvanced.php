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
 * PayrollItemSearchAdvanced
 */
class PayrollItemSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PayrollItemSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PayrollItemSearchRow
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
		"criteria" => "PayrollItemSearch",
		"columns" => "PayrollItemSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
