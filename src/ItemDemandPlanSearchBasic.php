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
 * ItemDemandPlanSearchBasic.
 */
class ItemDemandPlanSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $alternateSourceItem;
    /**
     * @var SearchLongField
     */
    public $analysisDuration;
    /**
     * @var SearchDateField
     */
    public $demandDate;
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
     * @var SearchMultiSelectField
     */
    public $item;
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
    public $memo;
    /**
     * @var SearchLongField
     */
    public $projectionDuration;
    /**
     * @var SearchMultiSelectField
     */
    public $projectionInterval;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $projectionMethod;
    /**
     * @var SearchDateField
     */
    public $projectionStartDate;
    /**
     * @var SearchDoubleField
     */
    public $quantity;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $units;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'alternateSourceItem' => 'SearchMultiSelectField',
        'analysisDuration' => 'SearchLongField',
        'demandDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'projectionDuration' => 'SearchLongField',
        'projectionInterval' => 'SearchMultiSelectField',
        'projectionMethod' => 'SearchEnumMultiSelectField',
        'projectionStartDate' => 'SearchDateField',
        'quantity' => 'SearchDoubleField',
        'subsidiary' => 'SearchMultiSelectField',
        'units' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
