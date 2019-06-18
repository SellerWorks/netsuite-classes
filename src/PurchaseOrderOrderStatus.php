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
 * PurchaseOrderOrderStatus.
 */
class PurchaseOrderOrderStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _closed = '_closed';
    /**
     * @var string
     */
    const _fullyBilled = '_fullyBilled';
    /**
     * @var string
     */
    const _partiallyReceived = '_partiallyReceived';
    /**
     * @var string
     */
    const _pendingBillingPartiallyReceived = '_pendingBillingPartiallyReceived';
    /**
     * @var string
     */
    const _pendingBilling = '_pendingBilling';
    /**
     * @var string
     */
    const _pendingReceipt = '_pendingReceipt';
    /**
     * @var string
     */
    const _pendingSupervisorApproval = '_pendingSupervisorApproval';
    /**
     * @var string
     */
    const _rejectedBySupervisor = '_rejectedBySupervisor';
}
