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
 * InventoryDetail
 */
class InventoryDetail extends Record {
	/**
	 * @access public
	 * @var InventoryAssignmentList
	 */
	public $inventoryAssignmentList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;

	static $paramtypesmap = array(
		"inventoryAssignmentList" => "InventoryAssignmentList",
		"customForm" => "RecordRef",
	);
}
