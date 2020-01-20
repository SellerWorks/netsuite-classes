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
 * OpportunitySearchAdvanced
 */
class OpportunitySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var OpportunitySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var OpportunitySearchRow
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
		"criteria" => "OpportunitySearch",
		"columns" => "OpportunitySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
