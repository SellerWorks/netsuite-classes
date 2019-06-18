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
 * VendorReturnAuthorizationOrderStatus.
 */
class VendorReturnAuthorizationOrderStatus
{
    public static $paramtypesmap = [
    ];
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
    const _credited = '_credited';
    /**
     * @var string
     */
    const _partiallyReturned = '_partiallyReturned';
    /**
     * @var string
     */
    const _pendingApproval = '_pendingApproval';
    /**
     * @var string
     */
    const _pendingCredit = '_pendingCredit';
    /**
     * @var string
     */
    const _pendingCreditPartiallyReturned = '_pendingCreditPartiallyReturned';
    /**
     * @var string
     */
    const _pendingReturn = '_pendingReturn';
    /**
     * @var string
     */
    const _undefined = '_undefined';
}
