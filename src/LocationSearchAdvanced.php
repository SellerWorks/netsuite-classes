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
 * LocationSearchAdvanced
 */
class LocationSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var LocationSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var LocationSearchRow
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
		"criteria" => "LocationSearch",
		"columns" => "LocationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
