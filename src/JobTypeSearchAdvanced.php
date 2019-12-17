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
 * JobTypeSearchAdvanced
 */
class JobTypeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var JobTypeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var JobTypeSearchRow
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
		"criteria" => "JobTypeSearch",
		"columns" => "JobTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
