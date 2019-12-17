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
 * JobPercentCompleteOverride.
 */
class JobPercentCompleteOverride
{
    /**
     * @var RecordRef
     */
    public $period;
    /**
     * @var float
     */
    public $percent;
    /**
     * @var string
     */
    public $comments;

    public static $paramtypesmap = [
        'period' => 'RecordRef',
        'percent' => 'float',
        'comments' => 'string',
    ];
}
