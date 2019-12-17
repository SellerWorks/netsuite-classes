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
 * Paycheck
 */
class Paycheck extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $batchNumber;
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
	public $entity;
	/**
	 * @access public
	 * @var string
	 */
	public $address;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workplace;
	/**
	 * @access public
	 * @var string
	 */
	public $tranId;
	/**
	 * @access public
	 * @var float
	 */
	public $userAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var string
	 */
	public $payFrequency;
	/**
	 * @access public
	 * @var float
	 */
	public $balance;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $periodEnding;
	/**
	 * @access public
	 * @var PaycheckPayEarnList
	 */
	public $payEarnList;
	/**
	 * @access public
	 * @var PaycheckPayTimeList
	 */
	public $payTimeList;
	/**
	 * @access public
	 * @var PaycheckPayExpList
	 */
	public $payExpList;
	/**
	 * @access public
	 * @var PaycheckPayPtoList
	 */
	public $payPtoList;
	/**
	 * @access public
	 * @var PaycheckPayDeductList
	 */
	public $payDeductList;
	/**
	 * @access public
	 * @var PaycheckPayContribList
	 */
	public $payContribList;
	/**
	 * @access public
	 * @var PaycheckPayTaxList
	 */
	public $payTaxList;
	/**
	 * @access public
	 * @var PaycheckPaySummaryList
	 */
	public $paySummaryList;
	/**
	 * @access public
	 * @var PaycheckPayDisburseList
	 */
	public $payDisburseList;
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
		"batchNumber" => "string",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"entity" => "RecordRef",
		"address" => "string",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"class" => "RecordRef",
		"workplace" => "RecordRef",
		"tranId" => "string",
		"userAmount" => "float",
		"memo" => "string",
		"account" => "RecordRef",
		"payFrequency" => "string",
		"balance" => "float",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"periodEnding" => "dateTime",
		"payEarnList" => "PaycheckPayEarnList",
		"payTimeList" => "PaycheckPayTimeList",
		"payExpList" => "PaycheckPayExpList",
		"payPtoList" => "PaycheckPayPtoList",
		"payDeductList" => "PaycheckPayDeductList",
		"payContribList" => "PaycheckPayContribList",
		"payTaxList" => "PaycheckPayTaxList",
		"paySummaryList" => "PaycheckPaySummaryList",
		"payDisburseList" => "PaycheckPayDisburseList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
