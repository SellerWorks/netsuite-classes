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
 * TaxGroupSearchBasic
 */
class TaxGroupSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
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
	 * @var SearchBooleanField
	 */
	public $includeChildren;
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
	public $isDefault;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $itemId;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $piggyBack;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxItem1;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxItem2;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitPrice1;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitPrice2;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zip;

	static $paramtypesmap = array(
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"includeChildren" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefault" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"itemId" => "SearchStringField",
		"piggyBack" => "SearchBooleanField",
		"rate" => "SearchDoubleField",
		"state" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxItem1" => "SearchMultiSelectField",
		"taxItem2" => "SearchMultiSelectField",
		"taxType" => "SearchMultiSelectField",
		"unitPrice1" => "SearchDoubleField",
		"unitPrice2" => "SearchDoubleField",
		"zip" => "SearchStringField",
	);
}
