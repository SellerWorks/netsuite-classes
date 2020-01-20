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
 * LocationSearchBasic
 */
class LocationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowStorePickup;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $autoAssignmentRegionSetting;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $bufferStock;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dailyShippingCapacity;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endTime;
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
	 * @var SearchEnumMultiSelectField
	 */
	public $geolocationMethod;
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
	public $isFriday;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isIncludeInCt;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isMonday;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOffice;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSaturday;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSunday;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isThursday;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTuesday;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isWednesday;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $latitude;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $longitude;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextPickupCutOffTime;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $sameDayPickupCutOffTime;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $storePickupBufferStock;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $timeZone;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $totalShippingCapacity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranprefix;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $usesBins;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"allowStorePickup" => "SearchBooleanField",
		"autoAssignmentRegionSetting" => "SearchEnumMultiSelectField",
		"bufferStock" => "SearchLongField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dailyShippingCapacity" => "SearchLongField",
		"endTime" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"geolocationMethod" => "SearchEnumMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isFriday" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isIncludeInCt" => "SearchBooleanField",
		"isMonday" => "SearchBooleanField",
		"isOffice" => "SearchBooleanField",
		"isSaturday" => "SearchBooleanField",
		"isSunday" => "SearchBooleanField",
		"isThursday" => "SearchBooleanField",
		"isTuesday" => "SearchBooleanField",
		"isWednesday" => "SearchBooleanField",
		"latitude" => "SearchDoubleField",
		"locationType" => "SearchEnumMultiSelectField",
		"longitude" => "SearchDoubleField",
		"makeInventoryAvailable" => "SearchBooleanField",
		"makeInventoryAvailableStore" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"nextPickupCutOffTime" => "SearchDateField",
		"phone" => "SearchStringField",
		"sameDayPickupCutOffTime" => "SearchDateField",
		"startTime" => "SearchDateField",
		"state" => "SearchStringField",
		"storePickupBufferStock" => "SearchDoubleField",
		"subsidiary" => "SearchMultiSelectField",
		"timeZone" => "SearchEnumMultiSelectField",
		"totalShippingCapacity" => "SearchLongField",
		"tranprefix" => "SearchStringField",
		"usesBins" => "SearchBooleanField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
