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
 * TimeBillSearchRowBasic
 */
class TimeBillSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $break;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $durationDecimal;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endTime;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $hours;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isExempt;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isProductive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isUtilized;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $paidExternally;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $payItem;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $payrollDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $rejectionNote;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $supervisorApproval;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $timeModified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $timeSheet;
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
		"approvalStatus" => "SearchColumnSelectField[]",
		"break" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"date" => "SearchColumnDateField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"durationDecimal" => "SearchColumnDoubleField[]",
		"employee" => "SearchColumnSelectField[]",
		"endTime" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"hours" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isBillable" => "SearchColumnBooleanField[]",
		"isExempt" => "SearchColumnBooleanField[]",
		"isProductive" => "SearchColumnBooleanField[]",
		"isUtilized" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnStringField[]",
		"lastModified" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"paidExternally" => "SearchColumnBooleanField[]",
		"payItem" => "SearchColumnSelectField[]",
		"payrollDate" => "SearchColumnDateField[]",
		"rate" => "SearchColumnDoubleField[]",
		"rejectionNote" => "SearchColumnStringField[]",
		"startTime" => "SearchColumnDateField[]",
		"status" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnStringField[]",
		"supervisorApproval" => "SearchColumnBooleanField[]",
		"temporaryLocalJurisdiction" => "SearchColumnStringField[]",
		"temporaryStateJurisdiction" => "SearchColumnStringField[]",
		"timeModified" => "SearchColumnBooleanField[]",
		"timeSheet" => "SearchColumnSelectField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
