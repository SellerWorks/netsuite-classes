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
 * EntityGroupSearchBasic.
 */
class EntityGroupSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchStringField
     */
    public $groupName;
    /**
     * @var SearchMultiSelectField
     */
    public $groupOwner;
    /**
     * @var SearchMultiSelectField
     */
    public $groupType;
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
    public $isDynamic;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isManufacturingWorkCenter;
    /**
     * @var SearchBooleanField
     */
    public $isPrivate;
    /**
     * @var SearchLongField
     */
    public $laborResources;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchLongField
     */
    public $machineResources;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $workCalendar;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'email' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'groupName' => 'SearchStringField',
        'groupOwner' => 'SearchMultiSelectField',
        'groupType' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDynamic' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isManufacturingWorkCenter' => 'SearchBooleanField',
        'isPrivate' => 'SearchBooleanField',
        'laborResources' => 'SearchLongField',
        'lastModifiedDate' => 'SearchDateField',
        'machineResources' => 'SearchLongField',
        'subsidiary' => 'SearchMultiSelectField',
        'workCalendar' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
