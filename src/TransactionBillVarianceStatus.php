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
 * TransactionBillVarianceStatus.
 */
class TransactionBillVarianceStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _journalNotPosted = '_journalNotPosted';
    /**
     * @var string
     */
    const _journalPosted = '_journalPosted';
    /**
     * @var string
     */
    const _noVariances = '_noVariances';
}
