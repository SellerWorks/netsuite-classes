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
 * ProjectTaskPredecessorPredecessorType.
 */
class ProjectTaskPredecessorPredecessorType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _finishToFinish = '_finishToFinish';
    /**
     * @var string
     */
    const _finishToStart = '_finishToStart';
    /**
     * @var string
     */
    const _startToFinish = '_startToFinish';
    /**
     * @var string
     */
    const _startToStart = '_startToStart';
}
