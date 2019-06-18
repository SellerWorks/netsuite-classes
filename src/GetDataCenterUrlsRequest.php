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
 * GetDataCenterUrlsRequest.
 */
class GetDataCenterUrlsRequest
{
    /**
     * @var string
     */
    public $account;

    public static $paramtypesmap = [
        'account' => 'string',
    ];
}
