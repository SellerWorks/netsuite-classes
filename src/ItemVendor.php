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
 * ItemVendor
 */
class ItemVendor {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendor;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorCode;
	/**
	 * @access public
	 * @var string
	 */
	public $vendorCurrencyName;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $vendorCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $purchasePrice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $preferredVendor;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $schedule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;

	static $paramtypesmap = array(
		"vendor" => "RecordRef",
		"vendorCode" => "string",
		"vendorCurrencyName" => "string",
		"vendorCurrency" => "RecordRef",
		"purchasePrice" => "float",
		"preferredVendor" => "boolean",
		"schedule" => "RecordRef",
		"subsidiary" => "RecordRef",
	);
}
