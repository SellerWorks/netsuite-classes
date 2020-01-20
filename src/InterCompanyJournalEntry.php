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
 * InterCompanyJournalEntry
 */
class InterCompanyJournalEntry extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $reversalDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $reversalDefer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentExpenseAlloc;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBookSpecific;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var string
	 */
	public $reversalEntry;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createdFrom;
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
	public $subsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var boolean
	 */
	public $approved;
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
	 * @var InterCompanyJournalEntryLineList
	 */
	public $lineList;
	/**
	 * @access public
	 * @var InterCompanyJournalEntryAccountingBookDetailList
	 */
	public $accountingBookDetailList;
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
		"postingPeriod" => "RecordRef",
		"customForm" => "RecordRef",
		"tranDate" => "dateTime",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"tranId" => "string",
		"reversalDate" => "dateTime",
		"reversalDefer" => "boolean",
		"parentExpenseAlloc" => "RecordRef",
		"isBookSpecific" => "boolean",
		"accountingBook" => "RecordRef",
		"reversalEntry" => "string",
		"createdFrom" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"memo" => "string",
		"toSubsidiary" => "RecordRef",
		"approved" => "boolean",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"lineList" => "InterCompanyJournalEntryLineList",
		"accountingBookDetailList" => "InterCompanyJournalEntryAccountingBookDetailList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
