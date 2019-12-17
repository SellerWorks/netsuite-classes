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
 * VendorSubsidiaryRelationshipSearchRowBasic
 */
class VendorSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balancebase;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $creditlimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entity;
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
	 * @var SearchColumnDoubleField[]
	 */
	public $inTransitBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $inTransitBalanceBase;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isprimarysub;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $primaryCurrency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxitem;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unbilledorders;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unbilledordersbase;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"balance" => "SearchColumnDoubleField[]",
		"balancebase" => "SearchColumnDoubleField[]",
		"baseCurrency" => "SearchColumnSelectField[]",
		"creditlimit" => "SearchColumnDoubleField[]",
		"entity" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inTransitBalance" => "SearchColumnDoubleField[]",
		"inTransitBalanceBase" => "SearchColumnDoubleField[]",
		"isprimarysub" => "SearchColumnBooleanField[]",
		"primaryCurrency" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"taxitem" => "SearchColumnSelectField[]",
		"unbilledorders" => "SearchColumnDoubleField[]",
		"unbilledordersbase" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
