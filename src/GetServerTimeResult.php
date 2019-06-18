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
 * GetServerTimeResult.
 */
class GetServerTimeResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var dateTime
     */
    public $serverTime;

    public static $paramtypesmap = [
        'status' => 'Status',
        'serverTime' => 'dateTime',
    ];
}
