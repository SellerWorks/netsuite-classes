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
 * AccountSearchBasic
 */
class AccountSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingContext;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $cashFlowRateType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category1099Misc;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $generalRateType;
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
	public $legalName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locale;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $localizedLegalName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $localizedName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $localizedNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingContext" => "SearchMultiSelectField",
		"balance" => "SearchDoubleField",
		"cashFlowRateType" => "SearchEnumMultiSelectField",
		"category1099Misc" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"generalRateType" => "SearchEnumMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"legalName" => "SearchStringField",
		"locale" => "SearchEnumMultiSelectField",
		"localizedLegalName" => "SearchStringField",
		"localizedName" => "SearchStringField",
		"localizedNumber" => "SearchStringField",
		"name" => "SearchStringField",
		"number" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
