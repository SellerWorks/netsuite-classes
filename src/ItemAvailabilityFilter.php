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
 * ItemAvailabilityFilter.
 */
class ItemAvailabilityFilter
{
    /**
     * @var RecordRefList
     */
    public $item;
    /**
     * @var dateTime
     */
    public $lastQtyAvailableChange;

    public static $paramtypesmap = [
        'item' => 'RecordRefList',
        'lastQtyAvailableChange' => 'dateTime',
    ];
}
