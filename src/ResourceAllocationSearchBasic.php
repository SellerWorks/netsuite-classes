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
 * ResourceAllocationSearchBasic
 */
class ResourceAllocationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $allocationType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $allocationUnit;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $notes;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $numberHours;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $percentOfTime;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $project;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $requestedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"allocationType" => "SearchMultiSelectField",
		"allocationUnit" => "SearchEnumMultiSelectField",
		"approvalStatus" => "SearchEnumMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"nextApprover" => "SearchMultiSelectField",
		"notes" => "SearchStringField",
		"numberHours" => "SearchDoubleField",
		"percentOfTime" => "SearchDoubleField",
		"project" => "SearchMultiSelectField",
		"requestedBy" => "SearchMultiSelectField",
		"resource" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
