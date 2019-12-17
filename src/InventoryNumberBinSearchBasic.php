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
 * InventoryNumberBinSearchBasic
 */
class InventoryNumberBinSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"inventoryNumber" => "SearchStringField",
		"location" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
	);
}
