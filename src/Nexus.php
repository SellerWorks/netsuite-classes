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
 * Nexus
 */
class Nexus extends Record {
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $state;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAgency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAgencyPst;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentNexus;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxDateFromFulfillment;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"country" => "Country",
		"state" => "RecordRef",
		"taxAgency" => "RecordRef",
		"taxAgencyPst" => "RecordRef",
		"taxCode" => "RecordRef",
		"description" => "string",
		"parentNexus" => "RecordRef",
		"isInactive" => "boolean",
		"taxDateFromFulfillment" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}
