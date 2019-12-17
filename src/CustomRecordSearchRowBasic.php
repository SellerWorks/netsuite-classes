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
 * CustomRecordSearchRowBasic.
 */
class CustomRecordSearchRowBasic extends SearchRowBasic
{
    /**
     * @var RecordRef
     */
    public $recType;
    /**
     * @var SearchColumnStringField[]
     */
    public $altName;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableOffline;
    /**
     * @var SearchColumnDateField[]
     */
    public $created;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnLongField[]
     */
    public $id;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModified;
    /**
     * @var SearchColumnSelectField[]
     */
    public $lastModifiedBy;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'recType' => 'RecordRef',
        'altName' => 'SearchColumnStringField[]',
        'availableOffline' => 'SearchColumnBooleanField[]',
        'created' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'id' => 'SearchColumnLongField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'lastModified' => 'SearchColumnDateField[]',
        'lastModifiedBy' => 'SearchColumnSelectField[]',
        'name' => 'SearchColumnStringField[]',
        'owner' => 'SearchColumnSelectField[]',
        'parent' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
