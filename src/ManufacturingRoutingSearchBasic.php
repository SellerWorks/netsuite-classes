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
 * ManufacturingRoutingSearchBasic.
 */
class ManufacturingRoutingSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $autoCalculateLag;
    /**
     * @var SearchMultiSelectField
     */
    public $billOfMaterials;
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
    public $isDefault;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDoubleField
     */
    public $lagAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $lagType;
    /**
     * @var SearchStringField
     */
    public $lagUnits;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchMultiSelectField
     */
    public $manufacturingCostTemplate;
    /**
     * @var SearchMultiSelectField
     */
    public $manufacturingWorkCenter;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchStringField
     */
    public $operationName;
    /**
     * @var SearchDoubleField
     */
    public $operationYield;
    /**
     * @var SearchDoubleField
     */
    public $runRate;
    /**
     * @var SearchLongField
     */
    public $sequence;
    /**
     * @var SearchDoubleField
     */
    public $setupTime;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'autoCalculateLag' => 'SearchBooleanField',
        'billOfMaterials' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDefault' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'lagAmount' => 'SearchDoubleField',
        'lagType' => 'SearchEnumMultiSelectField',
        'lagUnits' => 'SearchStringField',
        'location' => 'SearchMultiSelectField',
        'manufacturingCostTemplate' => 'SearchMultiSelectField',
        'manufacturingWorkCenter' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'name' => 'SearchStringField',
        'operationName' => 'SearchStringField',
        'operationYield' => 'SearchDoubleField',
        'runRate' => 'SearchDoubleField',
        'sequence' => 'SearchLongField',
        'setupTime' => 'SearchDoubleField',
        'subsidiary' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
