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
 * GlobalSubscriptionStatus.
 */
class GlobalSubscriptionStatus
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _confirmedOptIn = '_confirmedOptIn';
    /**
     * @var string
     */
    const _confirmedOptOut = '_confirmedOptOut';
    /**
     * @var string
     */
    const _softOptIn = '_softOptIn';
    /**
     * @var string
     */
    const _softOptOut = '_softOptOut';
}
