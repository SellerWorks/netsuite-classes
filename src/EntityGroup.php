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
 * EntityGroup.
 */
class EntityGroup extends Record
{
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var EntityGroupType
     */
    public $groupType;
    /**
     * @var string
     */
    public $email;
    /**
     * @var RecordRef
     */
    public $groupOwner;
    /**
     * @var bool
     */
    public $isSavedSearch;
    /**
     * @var EntityGroupType
     */
    public $parentGroupType;
    /**
     * @var RecordRef
     */
    public $savedSearch;
    /**
     * @var bool
     */
    public $isSalesTeam;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var bool
     */
    public $isPrivate;
    /**
     * @var RecordRef
     */
    public $restrictionGroup;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $isSalesRep;
    /**
     * @var bool
     */
    public $isSupportRep;
    /**
     * @var bool
     */
    public $isProductTeam;
    /**
     * @var bool
     */
    public $isFunctionalTeam;
    /**
     * @var RecordRef
     */
    public $issueRole;
    /**
     * @var bool
     */
    public $isManufacturingWorkCenter;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var int
     */
    public $machineResources;
    /**
     * @var int
     */
    public $laborResources;
    /**
     * @var RecordRef
     */
    public $workCalendar;
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

    public static $paramtypesmap = [
        'groupName' => 'string',
        'groupType' => 'EntityGroupType',
        'email' => 'string',
        'groupOwner' => 'RecordRef',
        'isSavedSearch' => 'boolean',
        'parentGroupType' => 'EntityGroupType',
        'savedSearch' => 'RecordRef',
        'isSalesTeam' => 'boolean',
        'comments' => 'string',
        'isPrivate' => 'boolean',
        'restrictionGroup' => 'RecordRef',
        'isInactive' => 'boolean',
        'isSalesRep' => 'boolean',
        'isSupportRep' => 'boolean',
        'isProductTeam' => 'boolean',
        'isFunctionalTeam' => 'boolean',
        'issueRole' => 'RecordRef',
        'isManufacturingWorkCenter' => 'boolean',
        'subsidiary' => 'RecordRef',
        'machineResources' => 'integer',
        'laborResources' => 'integer',
        'workCalendar' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
