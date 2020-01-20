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
 * InventoryNumberLocations
 */
class InventoryNumberLocations {
	/**
	 * @access public
	 * @var string
	 */
	public $location;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityInTransit;

	static $paramtypesmap = array(
		"location" => "string",
		"quantityOnHand" => "float",
		"quantityAvailable" => "float",
		"quantityOnOrder" => "float",
		"quantityInTransit" => "float",
	);
}
