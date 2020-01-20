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
 * AssemblyComponent
 */
class AssemblyComponent {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var InventoryDetail
	 */
	public $componentInventoryDetail;
	/**
	 * @access public
	 * @var string
	 */
	public $componentNumbers;
	/**
	 * @access public
	 * @var string
	 */
	public $binNumbers;
	/**
	 * @access public
	 * @var integer
	 */
	public $lineNumber;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"quantity" => "float",
		"quantityOnHand" => "float",
		"componentInventoryDetail" => "InventoryDetail",
		"componentNumbers" => "string",
		"binNumbers" => "string",
		"lineNumber" => "integer",
	);
}
