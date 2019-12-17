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
 * JobSearchAdvanced
 */
class JobSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var JobSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var JobSearchRow
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
		"criteria" => "JobSearch",
		"columns" => "JobSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
