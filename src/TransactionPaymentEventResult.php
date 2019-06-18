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
 * TransactionPaymentEventResult.
 */
class TransactionPaymentEventResult
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _accept = '_accept';
    /**
     * @var string
     */
    const _holdOverride = '_holdOverride';
    /**
     * @var string
     */
    const _paymentHold = '_paymentHold';
    /**
     * @var string
     */
    const _pending = '_pending';
    /**
     * @var string
     */
    const _reject = '_reject';
}
