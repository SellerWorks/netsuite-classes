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
 * ItemSupplyPlan.
 */
class ItemSupplyPlan extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var ItemSupplyPlanOrderList
     */
    public $orderList;
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
        'subsidiary' => 'RecordRef',
        'location' => 'RecordRef',
        'item' => 'RecordRef',
        'units' => 'RecordRef',
        'memo' => 'string',
        'orderList' => 'ItemSupplyPlanOrderList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
