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
 * ManufacturingRoutingRoutingComponent.
 */
class ManufacturingRoutingRoutingComponent
{
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $revision;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $yield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $units;
    /**
     * @var RecordRef
     */
    public $operationDisplayText;
    /**
     * @var int
     */
    public $operationSequenceNumber;
    /**
     * @var string
     */
    public $component;
    /**
     * @var string
     */
    public $item;

    public static $paramtypesmap = [
        'itemName' => 'string',
        'revision' => 'string',
        'description' => 'string',
        'yield' => 'float',
        'bomQuantity' => 'float',
        'quantity' => 'float',
        'units' => 'string',
        'operationDisplayText' => 'RecordRef',
        'operationSequenceNumber' => 'integer',
        'component' => 'string',
        'item' => 'string',
    ];
}
