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
 * UsageSearchRowBasic.
 */
class UsageSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var SearchColumnDateField[]
     */
    public $date;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscriptionLine;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscriptionPlan;

    public static $paramtypesmap = [
        'customer' => 'SearchColumnSelectField[]',
        'date' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'quantity' => 'SearchColumnDoubleField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'subscriptionLine' => 'SearchColumnSelectField[]',
        'subscriptionPlan' => 'SearchColumnSelectField[]',
    ];
}
