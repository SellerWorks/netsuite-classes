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
 * SupportCaseStage.
 */
class SupportCaseStage
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _closed = '_closed';
    /**
     * @var string
     */
    const _escalated = '_escalated';
    /**
     * @var string
     */
    const _open = '_open';
}
