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
 * BillingRates.
 */
class BillingRates
{
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $billingClass;
    /**
     * @var RateList
     */
    public $rateList;

    public static $paramtypesmap = [
        'currency' => 'RecordRef',
        'billingClass' => 'RecordRef',
        'rateList' => 'RateList',
    ];
}
