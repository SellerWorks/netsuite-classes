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
 * OpportunityStatus.
 */
class OpportunityStatus
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _closedLost = '_closedLost';
    /**
     * @var string
     */
    const _closedWon = '_closedWon';
    /**
     * @var string
     */
    const _inProgress = '_inProgress';
    /**
     * @var string
     */
    const _issuedEstimate = '_issuedEstimate';
}
