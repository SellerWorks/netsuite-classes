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
 * RevRecScheduleSearchRowBasic
 */
class RevRecScheduleSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $amorStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorTemplate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amortizedAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $deferredAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $destAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $initialAmt;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isRecognized;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $jeDoc;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $lineSequenceNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameUrl;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $pctComplete;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $pctRecognition;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurFxAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $schedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $scheduleNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $sourceAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $srcDocLine;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $srcTran;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $srcTranPostPeriod;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $startOffset;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"amorStatus" => "SearchColumnEnumSelectField[]",
		"amorTemplate" => "SearchColumnStringField[]",
		"amortizedAmount" => "SearchColumnDoubleField[]",
		"amorType" => "SearchColumnEnumSelectField[]",
		"amount" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnStringField[]",
		"deferredAmount" => "SearchColumnDoubleField[]",
		"destAcct" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"initialAmt" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isRecognized" => "SearchColumnBooleanField[]",
		"jeDoc" => "SearchColumnStringField[]",
		"lineSequenceNumber" => "SearchColumnLongField[]",
		"name" => "SearchColumnStringField[]",
		"nameUrl" => "SearchColumnStringField[]",
		"pctComplete" => "SearchColumnDoubleField[]",
		"pctRecognition" => "SearchColumnDoubleField[]",
		"periodOffset" => "SearchColumnLongField[]",
		"recurAmount" => "SearchColumnDoubleField[]",
		"recurFxAmount" => "SearchColumnDoubleField[]",
		"schedDate" => "SearchColumnDateField[]",
		"scheduleNumber" => "SearchColumnStringField[]",
		"sourceAcct" => "SearchColumnStringField[]",
		"srcDocLine" => "SearchColumnStringField[]",
		"srcTran" => "SearchColumnStringField[]",
		"srcTranPostPeriod" => "SearchColumnStringField[]",
		"startOffset" => "SearchColumnLongField[]",
		"useForeignAmounts" => "SearchColumnBooleanField[]",
	);
}
