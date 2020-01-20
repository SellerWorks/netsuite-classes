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
 * FairValuePriceSearchRowBasic
 */
class FairValuePriceSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fairValue;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $fairValueFormula;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $fairValueRangePolicy;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $highValue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $highValuePercent;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isVsoePrice;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $itemRevenueCategory;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lowValue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lowValuePercent;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $unitsType;

	static $paramtypesmap = array(
		"currency" => "SearchColumnSelectField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fairValue" => "SearchColumnDoubleField[]",
		"fairValueFormula" => "SearchColumnSelectField[]",
		"fairValueRangePolicy" => "SearchColumnEnumSelectField[]",
		"highValue" => "SearchColumnDoubleField[]",
		"highValuePercent" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isVsoePrice" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"itemRevenueCategory" => "SearchColumnSelectField[]",
		"lowValue" => "SearchColumnDoubleField[]",
		"lowValuePercent" => "SearchColumnDoubleField[]",
		"startDate" => "SearchColumnDateField[]",
		"units" => "SearchColumnSelectField[]",
		"unitsType" => "SearchColumnSelectField[]",
	);
}
