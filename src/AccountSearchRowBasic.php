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
 * AccountSearchRowBasic
 */
class AccountSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountingContext;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $cashFlowRateType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category1099Misc;
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
	 * @var SearchColumnEnumSelectField[]
	 */
	public $generalRateType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $legalName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $locale;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $localizedLegalName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $localizedName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $localizedNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingContext" => "SearchColumnStringField[]",
		"balance" => "SearchColumnDoubleField[]",
		"cashFlowRateType" => "SearchColumnEnumSelectField[]",
		"category1099Misc" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"generalRateType" => "SearchColumnEnumSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"legalName" => "SearchColumnStringField[]",
		"locale" => "SearchColumnStringField[]",
		"localizedLegalName" => "SearchColumnStringField[]",
		"localizedName" => "SearchColumnStringField[]",
		"localizedNumber" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"number" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
