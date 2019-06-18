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
 * AssemblyComponent.
 */
class AssemblyComponent
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var InventoryDetail
     */
    public $componentInventoryDetail;
    /**
     * @var string
     */
    public $componentNumbers;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var int
     */
    public $lineNumber;

    public static $paramtypesmap = array(
        'item' => 'RecordRef',
        'quantity' => 'float',
        'quantityOnHand' => 'float',
        'componentInventoryDetail' => 'InventoryDetail',
        'componentNumbers' => 'string',
        'binNumbers' => 'string',
        'lineNumber' => 'integer',
    );
}
