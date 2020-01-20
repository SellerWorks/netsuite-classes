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
 * NexusSearchBasic
 */
class NexusSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentNexus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxAgency;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxDateFromFulfillment;

	static $paramtypesmap = array(
		"country" => "SearchEnumMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"parentNexus" => "SearchMultiSelectField",
		"state" => "SearchMultiSelectField",
		"taxAgency" => "SearchMultiSelectField",
		"taxDateFromFulfillment" => "SearchBooleanField",
	);
}
