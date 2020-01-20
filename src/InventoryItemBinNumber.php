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
 * InventoryItemBinNumber
 */
class InventoryItemBinNumber {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $onHand;
	/**
	 * @access public
	 * @var string
	 */
	public $onHandAvail;
	/**
	 * @access public
	 * @var string
	 */
	public $location;
	/**
	 * @access public
	 * @var boolean
	 */
	public $preferredBin;

	static $paramtypesmap = array(
		"binNumber" => "RecordRef",
		"onHand" => "string",
		"onHandAvail" => "string",
		"location" => "string",
		"preferredBin" => "boolean",
	);
}
