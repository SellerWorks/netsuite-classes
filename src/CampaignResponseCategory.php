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
 * CampaignResponseCategory.
 */
class CampaignResponseCategory
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _bounced = '_bounced';
    /**
     * @var string
     */
    const _clickedThrough = '_clickedThrough';
    /**
     * @var string
     */
    const _failed = '_failed';
    /**
     * @var string
     */
    const _purchased = '_purchased';
    /**
     * @var string
     */
    const _queued = '_queued';
    /**
     * @var string
     */
    const _received = '_received';
    /**
     * @var string
     */
    const _responded = '_responded';
    /**
     * @var string
     */
    const _sent = '_sent';
    /**
     * @var string
     */
    const _subscribed = '_subscribed';
    /**
     * @var string
     */
    const _unsubscribed = '_unsubscribed';
}
