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
 * JobPlStatement.
 */
class JobPlStatement
{
    /**
     * @var string
     */
    public $costCategory;
    /**
     * @var float
     */
    public $revenue;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var float
     */
    public $profit;
    /**
     * @var float
     */
    public $margin;

    public static $paramtypesmap = array(
        'costCategory' => 'string',
        'revenue' => 'float',
        'cost' => 'float',
        'profit' => 'float',
        'margin' => 'float',
    );
}
