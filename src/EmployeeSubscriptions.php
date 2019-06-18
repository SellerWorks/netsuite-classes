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
 * EmployeeSubscriptions.
 */
class EmployeeSubscriptions
{
    /**
     * @var string
     */
    public $subscribed;
    /**
     * @var string
     */
    public $subscription;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;

    public static $paramtypesmap = [
        'subscribed' => 'string',
        'subscription' => 'string',
        'lastModifiedDate' => 'dateTime',
    ];
}
