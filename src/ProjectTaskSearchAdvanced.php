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
 * ProjectTaskSearchAdvanced
 */
class ProjectTaskSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ProjectTaskSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ProjectTaskSearchRow
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
		"criteria" => "ProjectTaskSearch",
		"columns" => "ProjectTaskSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
