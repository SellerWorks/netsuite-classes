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
 * TaxDetailSearchBasic
 */
class TaxDetailSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $lineNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $taxAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $taxBasis;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $taxRate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $tranId;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"lineNumber" => "SearchLongField",
		"taxAmount" => "SearchDoubleField",
		"taxBasis" => "SearchDoubleField",
		"taxCode" => "SearchMultiSelectField",
		"taxRate" => "SearchDoubleField",
		"taxType" => "SearchMultiSelectField",
		"tranId" => "SearchMultiSelectField",
	);
}
