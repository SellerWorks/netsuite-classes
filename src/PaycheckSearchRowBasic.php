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
 * PaycheckSearchRowBasic
 */
class PaycheckSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $amendedDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $batchNumber;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $checkDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasGLImpact;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $hours;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $payrollItem;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $payrollItemType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $subjectWages;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $taxableWages;

	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"amendedDate" => "SearchColumnDateField[]",
		"amount" => "SearchColumnDoubleField[]",
		"batchNumber" => "SearchColumnLongField[]",
		"checkDate" => "SearchColumnDateField[]",
		"employee" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"hasGLImpact" => "SearchColumnBooleanField[]",
		"hours" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"payrollItem" => "SearchColumnSelectField[]",
		"payrollItemType" => "SearchColumnSelectField[]",
		"subjectWages" => "SearchColumnDoubleField[]",
		"taxableWages" => "SearchColumnDoubleField[]",
	);
}
