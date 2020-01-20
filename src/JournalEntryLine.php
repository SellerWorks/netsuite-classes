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
 * JournalEntryLine
 */
class JournalEntryLine {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var float
	 */
	public $debit;
	/**
	 * @access public
	 * @var float
	 */
	public $credit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxAccount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $lineTaxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $lineTaxRate;
	/**
	 * @access public
	 * @var float
	 */
	public $debitTax;
	/**
	 * @access public
	 * @var float
	 */
	public $creditTax;
	/**
	 * @access public
	 * @var float
	 */
	public $taxBasis;
	/**
	 * @access public
	 * @var float
	 */
	public $totalAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revenueRecognitionRule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eliminate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $schedule;
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
	 * @var string
	 */
	public $residual;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $scheduleNum;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $tax1Acct;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "RecordRef",
		"line" => "integer",
		"debit" => "float",
		"credit" => "float",
		"taxAccount" => "RecordRef",
		"lineTaxCode" => "RecordRef",
		"lineTaxRate" => "float",
		"debitTax" => "float",
		"creditTax" => "float",
		"taxBasis" => "float",
		"totalAmount" => "float",
		"taxCode" => "RecordRef",
		"memo" => "string",
		"taxRate1" => "float",
		"entity" => "RecordRef",
		"grossAmt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revenueRecognitionRule" => "RecordRef",
		"eliminate" => "boolean",
		"schedule" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"residual" => "string",
		"scheduleNum" => "RecordRef",
		"tax1Amt" => "float",
		"tax1Acct" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}
