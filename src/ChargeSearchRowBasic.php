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
 * ChargeSearchRowBasic
 */
class ChargeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingItem;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billTo;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $chargeDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
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
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $modifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $rule;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $runId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscriptionLine;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $use;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amount" => "SearchColumnDoubleField[]",
		"billingAccount" => "SearchColumnSelectField[]",
		"billingItem" => "SearchColumnSelectField[]",
		"billTo" => "SearchColumnSelectField[]",
		"chargeDate" => "SearchColumnDateField[]",
		"chargeType" => "SearchColumnSelectField[]",
		"class" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"currency" => "SearchColumnSelectField[]",
		"department" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"modifiedDate" => "SearchColumnDateField[]",
		"postingPeriod" => "SearchColumnStringField[]",
		"quantity" => "SearchColumnStringField[]",
		"rate" => "SearchColumnStringField[]",
		"rule" => "SearchColumnSelectField[]",
		"runId" => "SearchColumnStringField[]",
		"salesOrder" => "SearchColumnStringField[]",
		"stage" => "SearchColumnEnumSelectField[]",
		"subscriptionLine" => "SearchColumnSelectField[]",
		"use" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
