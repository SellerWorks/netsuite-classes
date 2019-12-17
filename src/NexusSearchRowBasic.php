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
 * NexusSearchRowBasic
 */
class NexusSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parentNexus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxAgency;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $taxDateFromFulfillment;

	static $paramtypesmap = array(
		"country" => "SearchColumnEnumSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"parentNexus" => "SearchColumnSelectField[]",
		"state" => "SearchColumnSelectField[]",
		"taxAgency" => "SearchColumnSelectField[]",
		"taxDateFromFulfillment" => "SearchColumnBooleanField[]",
	);
}
