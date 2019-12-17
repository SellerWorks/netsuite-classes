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
 * CustomRecord.
 */
class CustomRecord extends Record
{
    /**
     * @var string
     */
    public $customRecordId;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $disclaimer;
    /**
     * @var dateTime
     */
    public $created;
    /**
     * @var dateTime
     */
    public $lastModified;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $autoName;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var RecordRef
     */
    public $recType;
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
     * @var string
     */
    public $description;
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
     * @var CustomRecordTranslationsList
     */
    public $translationsList;
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
     * @var bool
     */
    public $usePermissions;
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
    public $enablEmailMerge;
    /**
     * @var bool
     */
    public $isOrdered;
    /**
     * @var bool
     */
    public $allowInlineEditing;
    /**
     * @var bool
     */
    public $isAvailableOffline;
    /**
     * @var bool
     */
    public $allowQuickSearch;
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var string
     */
    public $scriptId;
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
        'customRecordId' => 'string',
        'customForm' => 'RecordRef',
        'isInactive' => 'boolean',
        'parent' => 'RecordRef',
        'disclaimer' => 'string',
        'created' => 'dateTime',
        'lastModified' => 'dateTime',
        'name' => 'string',
        'autoName' => 'boolean',
        'altName' => 'string',
        'owner' => 'RecordRef',
        'recType' => 'RecordRef',
        'enableNumbering' => 'boolean',
        'numberingPrefix' => 'string',
        'numberingSuffix' => 'string',
        'numberingMinDigits' => 'integer',
        'description' => 'string',
        'numberingInit' => 'integer',
        'numberingCurrentNumber' => 'integer',
        'allowNumberingOverride' => 'boolean',
        'isNumberingUpdateable' => 'boolean',
        'translationsList' => 'CustomRecordTranslationsList',
        'includeName' => 'boolean',
        'showId' => 'boolean',
        'showCreationDate' => 'boolean',
        'showCreationDateOnList' => 'boolean',
        'showLastModified' => 'boolean',
        'showLastModifiedOnList' => 'boolean',
        'showOwner' => 'boolean',
        'showOwnerOnList' => 'boolean',
        'showOwnerAllowChange' => 'boolean',
        'usePermissions' => 'boolean',
        'allowAttachments' => 'boolean',
        'showNotes' => 'boolean',
        'enablEmailMerge' => 'boolean',
        'isOrdered' => 'boolean',
        'allowInlineEditing' => 'boolean',
        'isAvailableOffline' => 'boolean',
        'allowQuickSearch' => 'boolean',
        'recordName' => 'string',
        'scriptId' => 'string',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
