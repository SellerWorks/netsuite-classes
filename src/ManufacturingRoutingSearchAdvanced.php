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
 * ManufacturingRoutingSearchAdvanced
 */
class ManufacturingRoutingSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingRoutingSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ManufacturingRoutingSearchRow
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
		"criteria" => "ManufacturingRoutingSearch",
		"columns" => "ManufacturingRoutingSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
