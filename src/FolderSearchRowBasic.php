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
 * FolderSearchRowBasic.
 */
class FolderSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnLongField[]
     */
    public $folderSize;
    /**
     * @var SearchColumnSelectField[]
     */
    public $group;
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
    public $lastModifiedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnLongField[]
     */
    public $numFiles;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    public static $paramtypesmap = [
        'class' => 'SearchColumnSelectField[]',
        'department' => 'SearchColumnSelectField[]',
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'folderSize' => 'SearchColumnLongField[]',
        'group' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'location' => 'SearchColumnSelectField[]',
        'name' => 'SearchColumnStringField[]',
        'numFiles' => 'SearchColumnLongField[]',
        'owner' => 'SearchColumnSelectField[]',
        'parent' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
    ];
}
