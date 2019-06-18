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
 * AccountingTransactionRevCommitStatus.
 */
class AccountingTransactionRevCommitStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _committed = '_committed';
    /**
     * @var string
     */
    const _partiallyCommitted = '_partiallyCommitted';
    /**
     * @var string
     */
    const _pendingCommitment = '_pendingCommitment';
}