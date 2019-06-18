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
 * ManufacturingRouting.
 */
class ManufacturingRouting extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $billOfMaterials;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRefList
     */
    public $locationList;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $autoCalculateLag;
    /**
     * @var ManufacturingRoutingRoutingStepList
     */
    public $routingStepList;
    /**
     * @var ManufacturingRoutingRoutingComponentList
     */
    public $routingComponentList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'customForm' => 'RecordRef',
        'billOfMaterials' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'item' => 'RecordRef',
        'locationList' => 'RecordRefList',
        'name' => 'string',
        'memo' => 'string',
        'isDefault' => 'boolean',
        'isInactive' => 'boolean',
        'autoCalculateLag' => 'boolean',
        'routingStepList' => 'ManufacturingRoutingRoutingStepList',
        'routingComponentList' => 'ManufacturingRoutingRoutingComponentList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
