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
 * LocationSearchRowBasic.
 */
class LocationSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allowStorePickup;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $autoAssignmentRegionSetting;
    /**
     * @var SearchColumnLongField[]
     */
    public $bufferStock;
    /**
     * @var SearchColumnStringField[]
     */
    public $city;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnLongField[]
     */
    public $dailyShippingCapacity;
    /**
     * @var SearchColumnDateField[]
     */
    public $endTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $geolocationMethod;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isFriday;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isMonday;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isOffice;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSaturday;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSunday;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isThursday;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isTuesday;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isWednesday;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $latitude;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $locationType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $longitude;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $makeInventoryAvailable;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $makeInventoryAvailableStore;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $nameNoHierarchy;
    /**
     * @var SearchColumnDateField[]
     */
    public $nextPickupCutOffTime;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnDateField[]
     */
    public $sameDayPickupCutOffTime;
    /**
     * @var SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var SearchColumnStringField[]
     */
    public $state;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $storePickupBufferStock;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $timeZone;
    /**
     * @var SearchColumnLongField[]
     */
    public $totalShippingCapacity;
    /**
     * @var SearchColumnStringField[]
     */
    public $tranPrefix;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $usesBins;
    /**
     * @var SearchColumnStringField[]
     */
    public $zip;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'allowStorePickup' => 'SearchColumnBooleanField[]',
        'autoAssignmentRegionSetting' => 'SearchColumnEnumSelectField[]',
        'bufferStock' => 'SearchColumnLongField[]',
        'city' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'dailyShippingCapacity' => 'SearchColumnLongField[]',
        'endTime' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'geolocationMethod' => 'SearchColumnEnumSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isFriday' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isMonday' => 'SearchColumnBooleanField[]',
        'isOffice' => 'SearchColumnBooleanField[]',
        'isSaturday' => 'SearchColumnBooleanField[]',
        'isSunday' => 'SearchColumnBooleanField[]',
        'isThursday' => 'SearchColumnBooleanField[]',
        'isTuesday' => 'SearchColumnBooleanField[]',
        'isWednesday' => 'SearchColumnBooleanField[]',
        'latitude' => 'SearchColumnDoubleField[]',
        'locationType' => 'SearchColumnEnumSelectField[]',
        'longitude' => 'SearchColumnDoubleField[]',
        'makeInventoryAvailable' => 'SearchColumnBooleanField[]',
        'makeInventoryAvailableStore' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'nameNoHierarchy' => 'SearchColumnStringField[]',
        'nextPickupCutOffTime' => 'SearchColumnDateField[]',
        'phone' => 'SearchColumnStringField[]',
        'sameDayPickupCutOffTime' => 'SearchColumnDateField[]',
        'startTime' => 'SearchColumnDateField[]',
        'state' => 'SearchColumnStringField[]',
        'storePickupBufferStock' => 'SearchColumnDoubleField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'timeZone' => 'SearchColumnEnumSelectField[]',
        'totalShippingCapacity' => 'SearchColumnLongField[]',
        'tranPrefix' => 'SearchColumnStringField[]',
        'usesBins' => 'SearchColumnBooleanField[]',
        'zip' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
