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
 * LocationSearchBasic.
 */
class LocationSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $address;
    /**
     * @var SearchBooleanField
     */
    public $allowStorePickup;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $autoAssignmentRegionSetting;
    /**
     * @var SearchLongField
     */
    public $bufferStock;
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $county;
    /**
     * @var SearchLongField
     */
    public $dailyShippingCapacity;
    /**
     * @var SearchDateField
     */
    public $endTime;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $geolocationMethod;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isFriday;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isIncludeInCt;
    /**
     * @var SearchBooleanField
     */
    public $isMonday;
    /**
     * @var SearchBooleanField
     */
    public $isOffice;
    /**
     * @var SearchBooleanField
     */
    public $isSaturday;
    /**
     * @var SearchBooleanField
     */
    public $isSunday;
    /**
     * @var SearchBooleanField
     */
    public $isThursday;
    /**
     * @var SearchBooleanField
     */
    public $isTuesday;
    /**
     * @var SearchBooleanField
     */
    public $isWednesday;
    /**
     * @var SearchDoubleField
     */
    public $latitude;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locationType;
    /**
     * @var SearchDoubleField
     */
    public $longitude;
    /**
     * @var SearchBooleanField
     */
    public $makeInventoryAvailable;
    /**
     * @var SearchBooleanField
     */
    public $makeInventoryAvailableStore;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchStringField
     */
    public $nameNoHierarchy;
    /**
     * @var SearchDateField
     */
    public $nextPickupCutOffTime;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchDateField
     */
    public $sameDayPickupCutOffTime;
    /**
     * @var SearchDateField
     */
    public $startTime;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchDoubleField
     */
    public $storePickupBufferStock;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $timeZone;
    /**
     * @var SearchLongField
     */
    public $totalShippingCapacity;
    /**
     * @var SearchStringField
     */
    public $tranprefix;
    /**
     * @var SearchBooleanField
     */
    public $usesBins;
    /**
     * @var SearchStringField
     */
    public $zip;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'address' => 'SearchStringField',
        'allowStorePickup' => 'SearchBooleanField',
        'autoAssignmentRegionSetting' => 'SearchEnumMultiSelectField',
        'bufferStock' => 'SearchLongField',
        'city' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'dailyShippingCapacity' => 'SearchLongField',
        'endTime' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'geolocationMethod' => 'SearchEnumMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isFriday' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isIncludeInCt' => 'SearchBooleanField',
        'isMonday' => 'SearchBooleanField',
        'isOffice' => 'SearchBooleanField',
        'isSaturday' => 'SearchBooleanField',
        'isSunday' => 'SearchBooleanField',
        'isThursday' => 'SearchBooleanField',
        'isTuesday' => 'SearchBooleanField',
        'isWednesday' => 'SearchBooleanField',
        'latitude' => 'SearchDoubleField',
        'locationType' => 'SearchEnumMultiSelectField',
        'longitude' => 'SearchDoubleField',
        'makeInventoryAvailable' => 'SearchBooleanField',
        'makeInventoryAvailableStore' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'nameNoHierarchy' => 'SearchStringField',
        'nextPickupCutOffTime' => 'SearchDateField',
        'phone' => 'SearchStringField',
        'sameDayPickupCutOffTime' => 'SearchDateField',
        'startTime' => 'SearchDateField',
        'state' => 'SearchStringField',
        'storePickupBufferStock' => 'SearchDoubleField',
        'subsidiary' => 'SearchMultiSelectField',
        'timeZone' => 'SearchEnumMultiSelectField',
        'totalShippingCapacity' => 'SearchLongField',
        'tranprefix' => 'SearchStringField',
        'usesBins' => 'SearchBooleanField',
        'zip' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
