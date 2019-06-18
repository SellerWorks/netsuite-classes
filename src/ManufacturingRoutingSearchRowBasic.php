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
 * ManufacturingRoutingSearchRowBasic.
 */
class ManufacturingRoutingSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnBooleanField[]
     */
    public $autoCalculateLag;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billOfMaterials;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDefault;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $lagAmount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $lagType;
    /**
     * @var SearchColumnStringField[]
     */
    public $lagUnits;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnSelectField[]
     */
    public $manufacturingCostTemplate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $manufacturingWorkCenter;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $operationName;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $operationYield;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $runRate;
    /**
     * @var SearchColumnLongField[]
     */
    public $sequence;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $setupTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'autoCalculateLag' => 'SearchColumnBooleanField[]',
        'billOfMaterials' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDefault' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnSelectField[]',
        'lagAmount' => 'SearchColumnDoubleField[]',
        'lagType' => 'SearchColumnEnumSelectField[]',
        'lagUnits' => 'SearchColumnStringField[]',
        'location' => 'SearchColumnSelectField[]',
        'manufacturingCostTemplate' => 'SearchColumnSelectField[]',
        'manufacturingWorkCenter' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'operationName' => 'SearchColumnStringField[]',
        'operationYield' => 'SearchColumnDoubleField[]',
        'runRate' => 'SearchColumnDoubleField[]',
        'sequence' => 'SearchColumnLongField[]',
        'setupTime' => 'SearchColumnDoubleField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
