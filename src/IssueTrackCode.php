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
 * IssueTrackCode.
 */
class IssueTrackCode
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _never = '_never';
    /**
     * @var string
     */
    const _onAnyChange = '_onAnyChange';
    /**
     * @var string
     */
    const _whenBaseStatusIsClosed = '_whenBaseStatusIsClosed';
    /**
     * @var string
     */
    const _whenBaseStatusIsOnHold = '_whenBaseStatusIsOnHold';
    /**
     * @var string
     */
    const _whenBaseStatusIsOpen = '_whenBaseStatusIsOpen';
    /**
     * @var string
     */
    const _whenBaseStatusIsResolved = '_whenBaseStatusIsResolved';
}
