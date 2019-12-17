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
 * Status.
 */
class Status
{
    /**
     * @var StatusDetail[]
     */
    public $statusDetail;
    /**
     * @var bool
     */
    public $isSuccess;

    public static $paramtypesmap = [
        'statusDetail' => 'StatusDetail[]',
        'isSuccess' => 'boolean',
    ];
}
