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
 * LotNumberedInventoryItemNumbers
 */
class LotNumberedInventoryItemNumbers {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;

	static $paramtypesmap = array(
		"serialNumber" => "RecordRef",
		"quantityOnHand" => "float",
		"expirationDate" => "dateTime",
	);
}
