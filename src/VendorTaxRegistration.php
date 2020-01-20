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
 * VendorTaxRegistration
 */
class VendorTaxRegistration {
	/**
	 * @access public
	 * @var Country
	 */
	public $nexusCountry;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $address;
	/**
	 * @access public
	 * @var string
	 */
	public $taxRegistrationNumber;
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	static $paramtypesmap = array(
		"nexusCountry" => "Country",
		"nexus" => "RecordRef",
		"address" => "RecordRef",
		"taxRegistrationNumber" => "string",
		"id" => "integer",
	);
}
