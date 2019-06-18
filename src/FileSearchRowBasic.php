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
 * FileSearchRowBasic.
 */
class FileSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableWithoutLogin;
    /**
     * @var SearchColumnDateField[]
     */
    public $created;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateViewed;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnLongField[]
     */
    public $documentSize;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $fileType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $folder;
    /**
     * @var SearchColumnLongField[]
     */
    public $hits;
    /**
     * @var SearchColumnStringField[]
     */
    public $hostedPath;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isAvailable;
    /**
     * @var SearchColumnDateField[]
     */
    public $modified;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnStringField[]
     */
    public $url;

    public static $paramtypesmap = [
        'availableWithoutLogin' => 'SearchColumnBooleanField[]',
        'created' => 'SearchColumnDateField[]',
        'dateViewed' => 'SearchColumnDateField[]',
        'description' => 'SearchColumnStringField[]',
        'documentSize' => 'SearchColumnLongField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fileType' => 'SearchColumnEnumSelectField[]',
        'folder' => 'SearchColumnSelectField[]',
        'hits' => 'SearchColumnLongField[]',
        'hostedPath' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isAvailable' => 'SearchColumnBooleanField[]',
        'modified' => 'SearchColumnDateField[]',
        'name' => 'SearchColumnStringField[]',
        'owner' => 'SearchColumnSelectField[]',
        'url' => 'SearchColumnStringField[]',
    ];
}
