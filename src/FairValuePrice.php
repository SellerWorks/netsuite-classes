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
 * FairValuePrice
 */
class FairValuePrice extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $itemRevenueCategory;
	/**
	 * @access public
	 * @var float
	 */
	public $fairValue;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fairValueFormula;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $units;
	/**
	 * @access public
	 * @var FairValuePriceFairValueRangePolicy
	 */
	public $fairValueRangePolicy;
	/**
	 * @access public
	 * @var float
	 */
	public $lowValue;
	/**
	 * @access public
	 * @var float
	 */
	public $lowValuePercent;
	/**
	 * @access public
	 * @var float
	 */
	public $highValue;
	/**
	 * @access public
	 * @var float
	 */
	public $highValuePercent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isVsoePrice;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var DimensionList
	 */
	public $dimensionList;
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
		"customForm" => "RecordRef",
		"item" => "RecordRef",
		"itemRevenueCategory" => "RecordRef",
		"fairValue" => "float",
		"fairValueFormula" => "RecordRef",
		"currency" => "RecordRef",
		"unitsType" => "RecordRef",
		"units" => "RecordRef",
		"fairValueRangePolicy" => "FairValuePriceFairValueRangePolicy",
		"lowValue" => "float",
		"lowValuePercent" => "float",
		"highValue" => "float",
		"highValuePercent" => "float",
		"isVsoePrice" => "boolean",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"customFieldList" => "CustomFieldList",
		"dimensionList" => "DimensionList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
