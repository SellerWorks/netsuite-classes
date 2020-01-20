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
 * FairValuePriceSearchBasic
 */
class FairValuePriceSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
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
	 * @var SearchDoubleField
	 */
	public $fairValue;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fairValueFormula;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $fairValueRangePolicy;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $highValue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $highValuePercent;
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
	public $isVsoePrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemRevenueCategory;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lowValue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lowValuePercent;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unitsType;

	static $paramtypesmap = array(
		"currency" => "SearchMultiSelectField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fairValue" => "SearchDoubleField",
		"fairValueFormula" => "SearchMultiSelectField",
		"fairValueRangePolicy" => "SearchEnumMultiSelectField",
		"highValue" => "SearchDoubleField",
		"highValuePercent" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isVsoePrice" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"itemRevenueCategory" => "SearchMultiSelectField",
		"lowValue" => "SearchDoubleField",
		"lowValuePercent" => "SearchDoubleField",
		"startDate" => "SearchDateField",
		"unitsType" => "SearchMultiSelectField",
	);
}
