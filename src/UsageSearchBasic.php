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
 * UsageSearchBasic.
 */
class UsageSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchDateField
     */
    public $date;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchDoubleField
     */
    public $quantity;
    /**
     * @var SearchMultiSelectField
     */
    public $subscription;
    /**
     * @var SearchMultiSelectField
     */
    public $subscriptionLine;
    /**
     * @var SearchMultiSelectField
     */
    public $subscriptionPlan;

    public static $paramtypesmap = [
        'customer' => 'SearchMultiSelectField',
        'date' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'quantity' => 'SearchDoubleField',
        'subscription' => 'SearchMultiSelectField',
        'subscriptionLine' => 'SearchMultiSelectField',
        'subscriptionPlan' => 'SearchMultiSelectField',
    ];
}
