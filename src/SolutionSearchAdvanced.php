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
 * SolutionSearchAdvanced
 */
class SolutionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SolutionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SolutionSearchRow
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
		"criteria" => "SolutionSearch",
		"columns" => "SolutionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
