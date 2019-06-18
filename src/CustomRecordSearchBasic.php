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
 * CustomRecordSearchBasic.
 */
class CustomRecordSearchBasic extends SearchRecordBasic
{
    /**
     * @var RecordRef
     */
    public $recType;
    /**
     * @var SearchBooleanField
     */
    public $availableOffline;
    /**
     * @var SearchDateField
     */
    public $created;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchLongField
     */
    public $id;
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
    public $isInactive;
    /**
     * @var SearchDateField
     */
    public $lastModified;
    /**
     * @var SearchMultiSelectField
     */
    public $lastModifiedBy;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $owner;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'recType' => 'RecordRef',
        'availableOffline' => 'SearchBooleanField',
        'created' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'id' => 'SearchLongField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'lastModified' => 'SearchDateField',
        'lastModifiedBy' => 'SearchMultiSelectField',
        'name' => 'SearchStringField',
        'owner' => 'SearchMultiSelectField',
        'parent' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
