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
 * TaxType
 */
class TaxType extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $doesNotAddToTotal;
	/**
	 * @access public
	 * @var boolean
	 */
	public $postToItemCost;
	/**
	 * @access public
	 * @var boolean
	 */
	public $taxInNetAmount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $reverseCharge;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var TaxTypeNexusAccountsList
	 */
	public $nexusAccountsList;
	/**
	 * @access public
	 * @var TaxTypeNexusesTaxList
	 */
	public $nexusesTaxList;
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
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
		"name" => "string",
		"description" => "string",
		"doesNotAddToTotal" => "boolean",
		"postToItemCost" => "boolean",
		"taxInNetAmount" => "boolean",
		"reverseCharge" => "boolean",
		"isInactive" => "boolean",
		"nexusAccountsList" => "TaxTypeNexusAccountsList",
		"nexusesTaxList" => "TaxTypeNexusesTaxList",
		"country" => "Country",
		"internalId" => "string",
		"externalId" => "string",
	);
}
