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
 * EntityGroupSearchRowBasic.
 */
class EntityGroupSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $groupName;
    /**
     * @var SearchColumnStringField[]
     */
    public $groupType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDynamic;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isManufacturingWorkCenter;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isPrivate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $laborResources;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $machineResources;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnStringField[]
     */
    public $savedSearch;
    /**
     * @var SearchColumnLongField[]
     */
    public $size;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $workCalendar;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'email' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'groupName' => 'SearchColumnStringField[]',
        'groupType' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDynamic' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isManufacturingWorkCenter' => 'SearchColumnBooleanField[]',
        'isPrivate' => 'SearchColumnBooleanField[]',
        'laborResources' => 'SearchColumnDoubleField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'machineResources' => 'SearchColumnDoubleField[]',
        'owner' => 'SearchColumnSelectField[]',
        'savedSearch' => 'SearchColumnStringField[]',
        'size' => 'SearchColumnLongField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'workCalendar' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
