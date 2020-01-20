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
 * ItemDemandPlanSearchAdvanced
 */
class ItemDemandPlanSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ItemDemandPlanSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ItemDemandPlanSearchRow
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
		"criteria" => "ItemDemandPlanSearch",
		"columns" => "ItemDemandPlanSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
