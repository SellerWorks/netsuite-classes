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
 * CustomerStatusStage.
 */
class CustomerStatusStage
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _customer = '_customer';
    /**
     * @var string
     */
    const _lead = '_lead';
    /**
     * @var string
     */
    const _prospect = '_prospect';
}
