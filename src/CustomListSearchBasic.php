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
 * CustomListSearchBasic.
 */
class CustomListSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $description;
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
    public $isOrdered;
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
    public $scriptId;

    public static $paramtypesmap = [
        'description' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'isOrdered' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'owner' => 'SearchMultiSelectField',
        'scriptId' => 'SearchStringField',
    ];
}
