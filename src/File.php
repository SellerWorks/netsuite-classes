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
 * File.
 */
class File extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var FileAttachFrom
     */
    public $attachFrom;
    /**
     * @var string
     */
    public $mediaTypeName;
    /**
     * @var MediaType
     */
    public $fileType;
    /**
     * @var base64Binary
     */
    public $content;
    /**
     * @var RecordRef
     */
    public $folder;
    /**
     * @var float
     */
    public $fileSize;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var RecordRef
     */
    public $mediaFile;
    /**
     * @var TextFileEncoding
     */
    public $textFileEncoding;
    /**
     * @var string
     */
    public $description;
    /**
     * @var FileEncoding
     */
    public $encoding;
    /**
     * @var string
     */
    public $altTagCaption;
    /**
     * @var bool
     */
    public $isOnline;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $class;
    /**
     * @var bool
     */
    public $bundleable;
    /**
     * @var string
     */
    public $department;
    /**
     * @var bool
     */
    public $hideInBundle;
    /**
     * @var bool
     */
    public $isPrivate;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $caption;
    /**
     * @var RecordRef
     */
    public $storeDisplayThumbnail;
    /**
     * @var string
     */
    public $siteDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var FileSiteCategoryList
     */
    public $siteCategoryList;
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
        'attachFrom' => 'FileAttachFrom',
        'mediaTypeName' => 'string',
        'fileType' => 'MediaType',
        'content' => 'base64Binary',
        'folder' => 'RecordRef',
        'fileSize' => 'float',
        'url' => 'string',
        'urlComponent' => 'string',
        'mediaFile' => 'RecordRef',
        'textFileEncoding' => 'TextFileEncoding',
        'description' => 'string',
        'encoding' => 'FileEncoding',
        'altTagCaption' => 'string',
        'isOnline' => 'boolean',
        'isInactive' => 'boolean',
        'class' => 'string',
        'bundleable' => 'boolean',
        'department' => 'string',
        'hideInBundle' => 'boolean',
        'isPrivate' => 'boolean',
        'owner' => 'RecordRef',
        'caption' => 'string',
        'storeDisplayThumbnail' => 'RecordRef',
        'siteDescription' => 'string',
        'featuredDescription' => 'string',
        'lastModifiedDate' => 'dateTime',
        'createdDate' => 'dateTime',
        'siteCategoryList' => 'FileSiteCategoryList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
