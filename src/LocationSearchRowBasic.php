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
 * LocationSearchRowBasic
 */
class LocationSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allowStorePickup;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $autoAssignmentRegionSetting;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $bufferStock;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $dailyShippingCapacity;
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
	 * @var SearchColumnEnumSelectField[]
	 */
	public $geolocationMethod;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isFriday;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isIncludeInCt;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isMonday;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOffice;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSaturday;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSunday;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isThursday;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isTuesday;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isWednesday;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $latitude;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $longitude;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $nextPickupCutOffTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $sameDayPickupCutOffTime;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $storePickupBufferStock;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $timeZone;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $totalShippingCapacity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $usesBins;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"allowStorePickup" => "SearchColumnBooleanField[]",
		"autoAssignmentRegionSetting" => "SearchColumnEnumSelectField[]",
		"bufferStock" => "SearchColumnLongField[]",
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"dailyShippingCapacity" => "SearchColumnLongField[]",
		"endTime" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"geolocationMethod" => "SearchColumnEnumSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isFriday" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isIncludeInCt" => "SearchColumnBooleanField[]",
		"isMonday" => "SearchColumnBooleanField[]",
		"isOffice" => "SearchColumnBooleanField[]",
		"isSaturday" => "SearchColumnBooleanField[]",
		"isSunday" => "SearchColumnBooleanField[]",
		"isThursday" => "SearchColumnBooleanField[]",
		"isTuesday" => "SearchColumnBooleanField[]",
		"isWednesday" => "SearchColumnBooleanField[]",
		"latitude" => "SearchColumnDoubleField[]",
		"locationType" => "SearchColumnEnumSelectField[]",
		"longitude" => "SearchColumnDoubleField[]",
		"makeInventoryAvailable" => "SearchColumnBooleanField[]",
		"makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"nextPickupCutOffTime" => "SearchColumnDateField[]",
		"phone" => "SearchColumnStringField[]",
		"sameDayPickupCutOffTime" => "SearchColumnDateField[]",
		"startTime" => "SearchColumnDateField[]",
		"state" => "SearchColumnStringField[]",
		"storePickupBufferStock" => "SearchColumnDoubleField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"timeZone" => "SearchColumnEnumSelectField[]",
		"totalShippingCapacity" => "SearchColumnLongField[]",
		"tranPrefix" => "SearchColumnStringField[]",
		"usesBins" => "SearchColumnBooleanField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
