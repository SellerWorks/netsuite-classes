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
 * BomRevisionComponent.
 */
class BomRevisionComponent
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $componentYield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var ItemSource
     */
    public $itemSource;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $units;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'description' => 'string',
        'componentYield' => 'float',
        'bomQuantity' => 'float',
        'itemSource' => 'ItemSource',
        'quantity' => 'float',
        'units' => 'string',
        'internalId' => 'string',
        'customFieldList' => 'CustomFieldList',
    ];
}
