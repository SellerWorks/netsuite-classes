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
 * WorkOrderIssueComponent
 */
class WorkOrderIssueComponent {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var integer
	 */
	public $operationSequenceNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $componentInventoryDetail;
	/**
	 * @access public
	 * @var integer
	 */
	public $lineNumber;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"operationSequenceNumber" => "integer",
		"quantity" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"lineNumber" => "integer",
	);
}
