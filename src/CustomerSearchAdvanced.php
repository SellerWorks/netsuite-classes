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
 * CustomerSearchAdvanced
 */
class CustomerSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerSearchRow
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
		"criteria" => "CustomerSearch",
		"columns" => "CustomerSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
