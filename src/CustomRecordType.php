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
 * CustomRecordType.
 */
class CustomRecordType extends Record
{
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var bool
     */
    public $includeName;
    /**
     * @var bool
     */
    public $showId;
    /**
     * @var bool
     */
    public $showCreationDate;
    /**
     * @var bool
     */
    public $showCreationDateOnList;
    /**
     * @var bool
     */
    public $showLastModified;
    /**
     * @var bool
     */
    public $showLastModifiedOnList;
    /**
     * @var bool
     */
    public $showOwner;
    /**
     * @var bool
     */
    public $showOwnerOnList;
    /**
     * @var bool
     */
    public $showOwnerAllowChange;
    /**
     * @var CustomRecordTypeAccessType
     */
    public $accessType;
    /**
     * @var bool
     */
    public $allowAttachments;
    /**
     * @var bool
     */
    public $showNotes;
    /**
     * @var bool
     */
    public $enableMailMerge;
    /**
     * @var bool
     */
    public $isOrdered;
    /**
     * @var bool
     */
    public $isAvailableOffline;
    /**
     * @var bool
     */
    public $allowQuickSearch;
    /**
     * @var bool
     */
    public $hierarchical;
    /**
     * @var bool
     */
    public $enableDle;
    /**
     * @var bool
     */
    public $enableNameTranslation;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $disclaimer;
    /**
     * @var bool
     */
    public $enableNumbering;
    /**
     * @var string
     */
    public $numberingPrefix;
    /**
     * @var string
     */
    public $numberingSuffix;
    /**
     * @var int
     */
    public $numberingMinDigits;
    /**
     * @var int
     */
    public $numberingInit;
    /**
     * @var int
     */
    public $numberingCurrentNumber;
    /**
     * @var bool
     */
    public $allowNumberingOverride;
    /**
     * @var bool
     */
    public $isNumberingUpdateable;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $description;
    /**
     * @var CustomRecordTypeTabsList
     */
    public $tabsList;
    /**
     * @var CustomRecordTypeSublistsList
     */
    public $sublistsList;
    /**
     * @var CustomRecordTypeFormsList
     */
    public $formsList;
    /**
     * @var CustomRecordTypeOnlineFormsList
     */
    public $onlineFormsList;
    /**
     * @var CustomRecordTypePermissionsList
     */
    public $permissionsList;
    /**
     * @var CustomRecordTypeLinksList
     */
    public $linksList;
    /**
     * @var CustomRecordTypeManagersList
     */
    public $managersList;
    /**
     * @var CustomRecordTypeChildrenList
     */
    public $childrenList;
    /**
     * @var CustomRecordTypeParentsList
     */
    public $parentsList;
    /**
     * @var CustomRecordTypeTranslationsList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $scriptId;
    /**
     * @var CustomRecordTypeFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = array(
        'recordName' => 'string',
        'includeName' => 'boolean',
        'showId' => 'boolean',
        'showCreationDate' => 'boolean',
        'showCreationDateOnList' => 'boolean',
        'showLastModified' => 'boolean',
        'showLastModifiedOnList' => 'boolean',
        'showOwner' => 'boolean',
        'showOwnerOnList' => 'boolean',
        'showOwnerAllowChange' => 'boolean',
        'accessType' => 'CustomRecordTypeAccessType',
        'allowAttachments' => 'boolean',
        'showNotes' => 'boolean',
        'enableMailMerge' => 'boolean',
        'isOrdered' => 'boolean',
        'isAvailableOffline' => 'boolean',
        'allowQuickSearch' => 'boolean',
        'hierarchical' => 'boolean',
        'enableDle' => 'boolean',
        'enableNameTranslation' => 'boolean',
        'isInactive' => 'boolean',
        'disclaimer' => 'string',
        'enableNumbering' => 'boolean',
        'numberingPrefix' => 'string',
        'numberingSuffix' => 'string',
        'numberingMinDigits' => 'integer',
        'numberingInit' => 'integer',
        'numberingCurrentNumber' => 'integer',
        'allowNumberingOverride' => 'boolean',
        'isNumberingUpdateable' => 'boolean',
        'owner' => 'RecordRef',
        'description' => 'string',
        'tabsList' => 'CustomRecordTypeTabsList',
        'sublistsList' => 'CustomRecordTypeSublistsList',
        'formsList' => 'CustomRecordTypeFormsList',
        'onlineFormsList' => 'CustomRecordTypeOnlineFormsList',
        'permissionsList' => 'CustomRecordTypePermissionsList',
        'linksList' => 'CustomRecordTypeLinksList',
        'managersList' => 'CustomRecordTypeManagersList',
        'childrenList' => 'CustomRecordTypeChildrenList',
        'parentsList' => 'CustomRecordTypeParentsList',
        'translationsList' => 'CustomRecordTypeTranslationsList',
        'scriptId' => 'string',
        'customFieldList' => 'CustomRecordTypeFieldList',
        'internalId' => 'string',
    );
}
