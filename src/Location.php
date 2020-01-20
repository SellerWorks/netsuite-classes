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
 * Location
 */
class Location extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var string
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var Address
	 */
	public $mainAddress;
	/**
	 * @access public
	 * @var Address
	 */
	public $returnAddress;
	/**
	 * @access public
	 * @var LocationType
	 */
	public $locationType;
	/**
	 * @access public
	 * @var LocationTimeZone
	 */
	public $timeZone;
	/**
	 * @access public
	 * @var float
	 */
	public $latitude;
	/**
	 * @access public
	 * @var float
	 */
	public $longitude;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $logo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useBins;
	/**
	 * @access public
	 * @var boolean
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var boolean
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var LocationGeolocationMethod
	 */
	public $geolocationMethod;
	/**
	 * @access public
	 * @var LocationAutoAssignmentRegionSetting
	 */
	public $autoAssignmentRegionSetting;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $nextPickupCutOffTime;
	/**
	 * @access public
	 * @var integer
	 */
	public $bufferStock;
	/**
	 * @access public
	 * @var boolean
	 */
	public $allowStorePickup;
	/**
	 * @access public
	 * @var float
	 */
	public $storePickupBufferStock;
	/**
	 * @access public
	 * @var integer
	 */
	public $dailyShippingCapacity;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalShippingCapacity;
	/**
	 * @access public
	 * @var LocationRegionsList
	 */
	public $includeLocationRegionsList;
	/**
	 * @access public
	 * @var LocationRegionsList
	 */
	public $excludeLocationRegionsList;
	/**
	 * @access public
	 * @var LocationBusinessHoursList
	 */
	public $businessHoursList;
	/**
	 * @access public
	 * @var ClassTranslationList
	 */
	public $classTranslationList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeInControlTower;
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
		"name" => "string",
		"parent" => "RecordRef",
		"includeChildren" => "boolean",
		"subsidiaryList" => "RecordRefList",
		"isInactive" => "boolean",
		"tranPrefix" => "string",
		"mainAddress" => "Address",
		"returnAddress" => "Address",
		"locationType" => "LocationType",
		"timeZone" => "LocationTimeZone",
		"latitude" => "float",
		"longitude" => "float",
		"logo" => "RecordRef",
		"useBins" => "boolean",
		"makeInventoryAvailable" => "boolean",
		"makeInventoryAvailableStore" => "boolean",
		"geolocationMethod" => "LocationGeolocationMethod",
		"autoAssignmentRegionSetting" => "LocationAutoAssignmentRegionSetting",
		"nextPickupCutOffTime" => "dateTime",
		"bufferStock" => "integer",
		"allowStorePickup" => "boolean",
		"storePickupBufferStock" => "float",
		"dailyShippingCapacity" => "integer",
		"totalShippingCapacity" => "integer",
		"includeLocationRegionsList" => "LocationRegionsList",
		"excludeLocationRegionsList" => "LocationRegionsList",
		"businessHoursList" => "LocationBusinessHoursList",
		"classTranslationList" => "ClassTranslationList",
		"includeInControlTower" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
