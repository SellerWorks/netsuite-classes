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
 * ItemCostAccountingStatus.
 */
class ItemCostAccountingStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _complete = '_complete';
    /**
     * @var string
     */
    const _failed = '_failed';
    /**
     * @var string
     */
    const _pending = '_pending';
    /**
     * @var string
     */
    const _processing = '_processing';
}
