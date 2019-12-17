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
 * SubsidiaryTaxRegistration
 */
class SubsidiaryTaxRegistration {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
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
	public $taxAgency;
	/**
	 * @access public
	 * @var string
	 */
	public $taxRegistrationNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxEngine;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveFrom;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validUntil;

	static $paramtypesmap = array(
		"id" => "integer",
		"nexusCountry" => "Country",
		"nexus" => "RecordRef",
		"taxAgency" => "RecordRef",
		"taxRegistrationNumber" => "string",
		"taxEngine" => "RecordRef",
		"effectiveFrom" => "dateTime",
		"validUntil" => "dateTime",
	);
}
