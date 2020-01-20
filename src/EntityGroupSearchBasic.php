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
 * EntityGroupSearchBasic
 */
class EntityGroupSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
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
	 * @var SearchStringField
	 */
	public $groupName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupOwner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupType;
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
	 * @var SearchBooleanField
	 */
	public $isDynamic;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isManufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"email" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"groupName" => "SearchStringField",
		"groupOwner" => "SearchMultiSelectField",
		"groupType" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDynamic" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isManufacturingWorkCenter" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"laborResources" => "SearchDoubleField",
		"lastModifiedDate" => "SearchDateField",
		"machineResources" => "SearchDoubleField",
		"subsidiary" => "SearchMultiSelectField",
		"workCalendar" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
