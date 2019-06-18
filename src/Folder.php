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
 * Folder.
 */
class Folder extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $isPrivate;
    /**
     * @var bool
     */
    public $bundleable;
    /**
     * @var bool
     */
    public $hideInBundle;
    /**
     * @var bool
     */
    public $isOnline;
    /**
     * @var RecordRef
     */
    public $group;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var FolderFolderType
     */
    public $folderType;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $subsidiary;
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
        'department' => 'RecordRef',
        'description' => 'string',
        'isInactive' => 'boolean',
        'isPrivate' => 'boolean',
        'bundleable' => 'boolean',
        'hideInBundle' => 'boolean',
        'isOnline' => 'boolean',
        'group' => 'RecordRef',
        'parent' => 'RecordRef',
        'folderType' => 'FolderFolderType',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
