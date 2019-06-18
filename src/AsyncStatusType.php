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
 * AsyncStatusType.
 */
class AsyncStatusType
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const failed = 'failed';
    /**
     * @var string
     */
    const finishedWithErrors = 'finishedWithErrors';
    /**
     * @var string
     */
    const pending = 'pending';
    /**
     * @var string
     */
    const processing = 'processing';
    /**
     * @var string
     */
    const finished = 'finished';
    /**
     * @var string
     */
    const retry = 'retry';
}
