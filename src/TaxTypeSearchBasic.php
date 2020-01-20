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
 * TaxTypeSearchBasic
 */
class TaxTypeSearchBasic extends SearchRecordBasic {
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
	 * @var SearchBooleanField
	 */
	public $doesNotAddToTotal;
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
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $nexus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payablesAccount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $postToItemCost;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $reverseCharge;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxInNetAmount;

	static $paramtypesmap = array(
		"country" => "SearchEnumMultiSelectField",
		"description" => "SearchStringField",
		"doesNotAddToTotal" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nexus" => "SearchMultiSelectField",
		"payablesAccount" => "SearchMultiSelectField",
		"postToItemCost" => "SearchBooleanField",
		"receivablesAccount" => "SearchMultiSelectField",
		"reverseCharge" => "SearchBooleanField",
		"taxInNetAmount" => "SearchBooleanField",
	);
}
