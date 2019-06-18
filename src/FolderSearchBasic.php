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
 * FolderSearchBasic.
 */
class FolderSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $group;
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
     * @var SearchBooleanField
     */
    public $isTopLevel;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchLongField
     */
    public $numFiles;
    /**
     * @var SearchMultiSelectField
     */
    public $owner;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchMultiSelectField
     */
    public $predecessor;
    /**
     * @var SearchBooleanField
     */
    public $private;
    /**
     * @var SearchLongField
     */
    public $size;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;

    public static $paramtypesmap = array(
        'class' => 'SearchMultiSelectField',
        'department' => 'SearchMultiSelectField',
        'description' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'group' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'isTopLevel' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'location' => 'SearchMultiSelectField',
        'name' => 'SearchStringField',
        'numFiles' => 'SearchLongField',
        'owner' => 'SearchMultiSelectField',
        'parent' => 'SearchMultiSelectField',
        'predecessor' => 'SearchMultiSelectField',
        'private' => 'SearchBooleanField',
        'size' => 'SearchLongField',
        'subsidiary' => 'SearchMultiSelectField',
    );
}
