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
 * Subscriptions.
 */
class Subscriptions
{
    /**
     * @var bool
     */
    public $subscribed;
    /**
     * @var RecordRef
     */
    public $subscription;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;

    public static $paramtypesmap = array(
        'subscribed' => 'boolean',
        'subscription' => 'RecordRef',
        'lastModifiedDate' => 'dateTime',
    );
}
