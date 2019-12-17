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
 * ItemCostingMethod.
 */
class ItemCostingMethod
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _average = '_average';
    /**
     * @var string
     */
    const _fifo = '_fifo';
    /**
     * @var string
     */
    const _groupAverage = '_groupAverage';
    /**
     * @var string
     */
    const _lifo = '_lifo';
    /**
     * @var string
     */
    const _lotNumbered = '_lotNumbered';
    /**
     * @var string
     */
    const _serialized = '_serialized';
    /**
     * @var string
     */
    const _standard = '_standard';
}
