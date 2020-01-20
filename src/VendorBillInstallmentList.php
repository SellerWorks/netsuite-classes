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
 * VendorBillInstallmentList
 */
class VendorBillInstallmentList {
	/**
	 * @access public
	 * @var VendorBillInstallment[]
	 */
	public $vendorBillInstallment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"vendorBillInstallment" => "VendorBillInstallment[]",
		"replaceAll" => "boolean",
	);
}
