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
 * Location.
 */
class Location extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $tranPrefix;
    /**
     * @var Address
     */
    public $mainAddress;
    /**
     * @var Address
     */
    public $returnAddress;
    /**
     * @var LocationType
     */
    public $locationType;
    /**
     * @var LocationTimeZone
     */
    public $timeZone;
    /**
     * @var float
     */
    public $latitude;
    /**
     * @var float
     */
    public $longitude;
    /**
     * @var RecordRef
     */
    public $logo;
    /**
     * @var bool
     */
    public $useBins;
    /**
     * @var bool
     */
    public $makeInventoryAvailable;
    /**
     * @var bool
     */
    public $makeInventoryAvailableStore;
    /**
     * @var LocationGeolocationMethod
     */
    public $geolocationMethod;
    /**
     * @var LocationAutoAssignmentRegionSetting
     */
    public $autoAssignmentRegionSetting;
    /**
     * @var dateTime
     */
    public $nextPickupCutOffTime;
    /**
     * @var int
     */
    public $bufferStock;
    /**
     * @var bool
     */
    public $allowStorePickup;
    /**
     * @var float
     */
    public $storePickupBufferStock;
    /**
     * @var int
     */
    public $dailyShippingCapacity;
    /**
     * @var int
     */
    public $totalShippingCapacity;
    /**
     * @var LocationRegionsList
     */
    public $includeLocationRegionsList;
    /**
     * @var LocationRegionsList
     */
    public $excludeLocationRegionsList;
    /**
     * @var LocationBusinessHoursList
     */
    public $businessHoursList;
    /**
     * @var ClassTranslationList
     */
    public $classTranslationList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'parent' => 'RecordRef',
        'includeChildren' => 'boolean',
        'subsidiaryList' => 'RecordRefList',
        'isInactive' => 'boolean',
        'tranPrefix' => 'string',
        'mainAddress' => 'Address',
        'returnAddress' => 'Address',
        'locationType' => 'LocationType',
        'timeZone' => 'LocationTimeZone',
        'latitude' => 'float',
        'longitude' => 'float',
        'logo' => 'RecordRef',
        'useBins' => 'boolean',
        'makeInventoryAvailable' => 'boolean',
        'makeInventoryAvailableStore' => 'boolean',
        'geolocationMethod' => 'LocationGeolocationMethod',
        'autoAssignmentRegionSetting' => 'LocationAutoAssignmentRegionSetting',
        'nextPickupCutOffTime' => 'dateTime',
        'bufferStock' => 'integer',
        'allowStorePickup' => 'boolean',
        'storePickupBufferStock' => 'float',
        'dailyShippingCapacity' => 'integer',
        'totalShippingCapacity' => 'integer',
        'includeLocationRegionsList' => 'LocationRegionsList',
        'excludeLocationRegionsList' => 'LocationRegionsList',
        'businessHoursList' => 'LocationBusinessHoursList',
        'classTranslationList' => 'ClassTranslationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
