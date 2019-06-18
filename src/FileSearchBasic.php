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
 * FileSearchBasic.
 */
class FileSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $availableWithoutLogin;
    /**
     * @var SearchDateField
     */
    public $created;
    /**
     * @var SearchDateField
     */
    public $dateViewed;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchLongField
     */
    public $documentSize;
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
    public $fileType;
    /**
     * @var SearchMultiSelectField
     */
    public $folder;
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
    public $isAvailable;
    /**
     * @var SearchBooleanField
     */
    public $isLink;
    /**
     * @var SearchDateField
     */
    public $modified;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $owner;
    /**
     * @var SearchStringField
     */
    public $url;

    public static $paramtypesmap = array(
        'availableWithoutLogin' => 'SearchBooleanField',
        'created' => 'SearchDateField',
        'dateViewed' => 'SearchDateField',
        'description' => 'SearchStringField',
        'documentSize' => 'SearchLongField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fileType' => 'SearchEnumMultiSelectField',
        'folder' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isAvailable' => 'SearchBooleanField',
        'isLink' => 'SearchBooleanField',
        'modified' => 'SearchDateField',
        'name' => 'SearchStringField',
        'owner' => 'SearchMultiSelectField',
        'url' => 'SearchStringField',
    );
}
