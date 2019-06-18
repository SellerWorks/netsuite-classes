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
 * Duration.
 */
class Duration
{
    /**
     * @var float
     */
    public $timeSpan;
    /**
     * @var DurationUnit
     */
    public $unit;

    public static $paramtypesmap = array(
        'timeSpan' => 'float',
        'unit' => 'DurationUnit',
    );
}
