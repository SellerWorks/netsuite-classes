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
 * ExpenseReport
 */
class ExpenseReport extends Record {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $expenseReportCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $expenseReportExchangeRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $taxPointDate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $acctCorpCardExp;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var float
	 */
	public $advance;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $complete;
	/**
	 * @access public
	 * @var boolean
	 */
	public $supervisorApproval;
	/**
	 * @access public
	 * @var boolean
	 */
	public $accountingApproval;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useMultiCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $tax2Amt;
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
	 * @var ExpenseReportExpenseList
	 */
	public $expenseList;
	/**
	 * @access public
	 * @var AccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * @access public
	 * @var TaxDetailsList
	 */
	public $taxDetailsList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $nexus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiaryTaxRegNum;
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
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"entity" => "RecordRef",
		"expenseReportCurrency" => "RecordRef",
		"expenseReportExchangeRate" => "float",
		"subsidiary" => "RecordRef",
		"taxPointDate" => "dateTime",
		"tranId" => "string",
		"acctCorpCardExp" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"dueDate" => "dateTime",
		"approvalStatus" => "RecordRef",
		"total" => "float",
		"nextApprover" => "RecordRef",
		"advance" => "float",
		"tax1Amt" => "float",
		"amount" => "float",
		"memo" => "string",
		"complete" => "boolean",
		"supervisorApproval" => "boolean",
		"accountingApproval" => "boolean",
		"useMultiCurrency" => "boolean",
		"tax2Amt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"expenseList" => "ExpenseReportExpenseList",
		"accountingBookDetailList" => "AccountingBookDetailList",
		"taxDetailsList" => "TaxDetailsList",
		"nexus" => "RecordRef",
		"subsidiaryTaxRegNum" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
