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
 * WorkOrderOrderStatus.
 */
class WorkOrderOrderStatus
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _built = '_built';
    /**
     * @var string
     */
    const _cancelled = '_cancelled';
    /**
     * @var string
     */
    const _closed = '_closed';
    /**
     * @var string
     */
    const _inProcess = '_inProcess';
    /**
     * @var string
     */
    const _planned = '_planned';
    /**
     * @var string
     */
    const _released = '_released';
    /**
     * @var string
     */
    const _undefined = '_undefined';
}
