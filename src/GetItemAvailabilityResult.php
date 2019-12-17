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
 * GetItemAvailabilityResult.
 */
class GetItemAvailabilityResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var ItemAvailabilityList
     */
    public $itemAvailabilityList;

    public static $paramtypesmap = [
        'status' => 'Status',
        'itemAvailabilityList' => 'ItemAvailabilityList',
    ];
}
