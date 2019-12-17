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
 * EntityGroupSearchRowBasic
 */
class EntityGroupSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $groupName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $groupType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDynamic;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isManufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $savedSearch;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $size;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"email" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"groupName" => "SearchColumnStringField[]",
		"groupType" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDynamic" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isManufacturingWorkCenter" => "SearchColumnBooleanField[]",
		"isPrivate" => "SearchColumnBooleanField[]",
		"laborResources" => "SearchColumnDoubleField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"machineResources" => "SearchColumnDoubleField[]",
		"owner" => "SearchColumnSelectField[]",
		"savedSearch" => "SearchColumnStringField[]",
		"size" => "SearchColumnLongField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"workCalendar" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
