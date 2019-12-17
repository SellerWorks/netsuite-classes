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
 * TaxDetailSearchRowBasic
 */
class TaxDetailSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $details;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $lineNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $taxAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $taxBasis;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $taxRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxType;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $tranId;

	static $paramtypesmap = array(
		"account" => "SearchColumnStringField[]",
		"details" => "SearchColumnStringField[]",
		"lineNumber" => "SearchColumnLongField[]",
		"taxAmount" => "SearchColumnDoubleField[]",
		"taxBasis" => "SearchColumnDoubleField[]",
		"taxCode" => "SearchColumnSelectField[]",
		"taxRate" => "SearchColumnDoubleField[]",
		"taxType" => "SearchColumnSelectField[]",
		"tranId" => "SearchColumnLongField[]",
	);
}
