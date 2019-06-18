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
 * PaymentInstrumentState.
 */
class PaymentInstrumentState
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _expired = '_expired';
    /**
     * @var string
     */
    const _invalid = '_invalid';
    /**
     * @var string
     */
    const _unknown = '_unknown';
    /**
     * @var string
     */
    const _verified = '_verified';
}
