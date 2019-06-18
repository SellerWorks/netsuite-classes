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
 * UsageSearchRow.
 */
class UsageSearchRow extends SearchRow
{
    /**
     * @var UsageSearchRowBasic
     */
    public $basic;
    /**
     * @var ChargeSearchRowBasic
     */
    public $chargeJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $subscriptionPlanJoin;

    public static $paramtypesmap = array(
        'basic' => 'UsageSearchRowBasic',
        'chargeJoin' => 'ChargeSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'subscriptionPlanJoin' => 'ItemSearchRowBasic',
    );
}
