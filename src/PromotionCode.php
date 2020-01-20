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
 * PromotionCode
 */
class PromotionCode extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $implementation;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var PromotionCodeUseType
	 */
	public $useType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $displayLineDiscounts;
	/**
	 * @access public
	 * @var string
	 */
	public $code;
	/**
	 * @access public
	 * @var string
	 */
	public $codePattern;
	/**
	 * @access public
	 * @var integer
	 */
	public $numberToGenerate;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $locationList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $discount;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $discountType;
	/**
	 * @access public
	 * @var PromotionCodeApplyDiscountTo
	 */
	public $applyDiscountTo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $freeShipMethod;
	/**
	 * @access public
	 * @var float
	 */
	public $minimumOrderAmount;
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
	 * @var boolean
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var PromotionCodeCurrencyList
	 */
	public $currencyList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $excludeItems;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var PromotionCodeItemsList
	 */
	public $itemsList;
	/**
	 * @access public
	 * @var PromotionCodePartnersList
	 */
	public $partnersList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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
		"implementation" => "RecordRef",
		"customForm" => "RecordRef",
		"useType" => "PromotionCodeUseType",
		"displayLineDiscounts" => "boolean",
		"code" => "string",
		"codePattern" => "string",
		"numberToGenerate" => "integer",
		"description" => "string",
		"locationList" => "RecordRefList",
		"isInactive" => "boolean",
		"discount" => "RecordRef",
		"rate" => "string",
		"discountType" => "boolean",
		"applyDiscountTo" => "PromotionCodeApplyDiscountTo",
		"freeShipMethod" => "RecordRef",
		"minimumOrderAmount" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"isPublic" => "boolean",
		"currencyList" => "PromotionCodeCurrencyList",
		"excludeItems" => "boolean",
		"name" => "string",
		"itemsList" => "PromotionCodeItemsList",
		"partnersList" => "PromotionCodePartnersList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
