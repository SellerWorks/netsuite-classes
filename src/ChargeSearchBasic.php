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
 * ChargeSearchBasic
 */
class ChargeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billTo;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $chargeDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
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
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $modifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $postingPeriodRelative;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $rule;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $runId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscriptionLine;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $use;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amount" => "SearchDoubleField",
		"billingAccount" => "SearchMultiSelectField",
		"billingItem" => "SearchMultiSelectField",
		"billTo" => "SearchMultiSelectField",
		"chargeDate" => "SearchDateField",
		"chargeType" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"currency" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"location" => "SearchMultiSelectField",
		"modifiedDate" => "SearchDateField",
		"postingPeriod" => "RecordRef",
		"postingPeriodRelative" => "PostingPeriodDate",
		"quantity" => "SearchDoubleField",
		"rate" => "SearchDoubleField",
		"rule" => "SearchMultiSelectField",
		"runId" => "SearchStringField",
		"salesOrder" => "SearchLongField",
		"stage" => "SearchEnumMultiSelectField",
		"subscriptionLine" => "SearchMultiSelectField",
		"use" => "SearchEnumMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
