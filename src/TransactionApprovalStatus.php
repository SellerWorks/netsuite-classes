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
 * TransactionApprovalStatus.
 */
class TransactionApprovalStatus
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _approved = '_approved';
    /**
     * @var string
     */
    const _open = '_open';
    /**
     * @var string
     */
    const _pendingApproval = '_pendingApproval';
    /**
     * @var string
     */
    const _rejected = '_rejected';
}
