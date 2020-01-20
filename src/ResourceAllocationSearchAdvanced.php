<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * ResourceAllocationSearchAdvanced
 */
class ResourceAllocationSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ResourceAllocationSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ResourceAllocationSearchRow
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
		"criteria" => "ResourceAllocationSearch",
		"columns" => "ResourceAllocationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
