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
 * PricingGroupSearchAdvanced
 */
class PricingGroupSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PricingGroupSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PricingGroupSearchRow
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
		"criteria" => "PricingGroupSearch",
		"columns" => "PricingGroupSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
