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
 * Usage.
 */
class Usage extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $subscriptionPlan;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $usageSubscription;
    /**
     * @var RecordRef
     */
    public $usageSubscriptionLine;
    /**
     * @var float
     */
    public $usageQuantity;
    /**
     * @var dateTime
     */
    public $usageDate;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'memo' => 'string',
        'item' => 'RecordRef',
        'subscriptionPlan' => 'RecordRef',
        'customer' => 'RecordRef',
        'usageSubscription' => 'RecordRef',
        'usageSubscriptionLine' => 'RecordRef',
        'usageQuantity' => 'float',
        'usageDate' => 'dateTime',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
