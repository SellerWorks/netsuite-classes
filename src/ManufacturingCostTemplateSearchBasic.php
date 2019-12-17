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
 * ManufacturingCostTemplateSearchBasic.
 */
class ManufacturingCostTemplateSearchBasic extends SearchRecordBasic
{
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
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'name' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
