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
 * InventoryNumberBinSearchRowBasic
 */
class InventoryNumberBinSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
}
