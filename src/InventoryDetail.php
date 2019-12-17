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
 * InventoryDetail.
 */
class InventoryDetail extends Record
{
    /**
     * @var InventoryAssignmentList
     */
    public $inventoryAssignmentList;
    /**
     * @var RecordRef
     */
    public $customForm;

    public static $paramtypesmap = [
        'inventoryAssignmentList' => 'InventoryAssignmentList',
        'customForm' => 'RecordRef',
    ];
}
