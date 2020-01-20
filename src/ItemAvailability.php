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
 * ItemAvailability
 */
class ItemAvailability {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastQtyAvailableChange;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $locationId;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $onHandValueMli;
	/**
	 * @access public
	 * @var float
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var float
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"lastQtyAvailableChange" => "dateTime",
		"locationId" => "RecordRef",
		"quantityOnHand" => "float",
		"onHandValueMli" => "float",
		"reorderPoint" => "float",
		"preferredStockLevel" => "float",
		"quantityOnOrder" => "float",
		"quantityCommitted" => "float",
		"quantityBackOrdered" => "float",
		"quantityAvailable" => "float",
	);
}
