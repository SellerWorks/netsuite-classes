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
 * MerchandiseHierarchyNodeSearchRow
 */
class MerchandiseHierarchyNodeSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var MerchandiseHierarchyNodeSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var MerchandiseHierarchyNodeSearchRowBasic
	 */
	public $parentNodeJoin;

	static $paramtypesmap = array(
		"basic" => "MerchandiseHierarchyNodeSearchRowBasic",
		"parentNodeJoin" => "MerchandiseHierarchyNodeSearchRowBasic",
	);
}
