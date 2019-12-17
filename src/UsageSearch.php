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
 * UsageSearch.
 */
class UsageSearch extends SearchRecord
{
    /**
     * @var UsageSearchBasic
     */
    public $basic;
    /**
     * @var ChargeSearchBasic
     */
    public $chargeJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var ItemSearchBasic
     */
    public $subscriptionPlanJoin;

    public static $paramtypesmap = [
        'basic' => 'UsageSearchBasic',
        'chargeJoin' => 'ChargeSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'subscriptionPlanJoin' => 'ItemSearchBasic',
    ];
}
