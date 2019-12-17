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
 * VendorSubsidiaryRelationshipSearchBasic
 */
class VendorSubsidiaryRelationshipSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balanceBase;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entity;
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
	 * @var SearchDoubleField
	 */
	public $inTransitBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $inTransitBalanceBase;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrimarySub;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $primaryCurrency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrdersBase;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"balance" => "SearchDoubleField",
		"balanceBase" => "SearchDoubleField",
		"baseCurrency" => "SearchMultiSelectField",
		"creditLimit" => "SearchDoubleField",
		"entity" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inTransitBalance" => "SearchDoubleField",
		"inTransitBalanceBase" => "SearchDoubleField",
		"isPrimarySub" => "SearchBooleanField",
		"primaryCurrency" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxItem" => "SearchMultiSelectField",
		"unbilledOrders" => "SearchDoubleField",
		"unbilledOrdersBase" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
