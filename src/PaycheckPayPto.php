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
 * PaycheckPayPto.
 */
class PaycheckPayPto
{
    /**
     * @var int
     */
    public $payItem;
    /**
     * @var string
     */
    public $payItemName;
    /**
     * @var float
     */
    public $hoursAccrued;
    /**
     * @var float
     */
    public $hoursUsed;
    /**
     * @var float
     */
    public $hoursBalance;

    public static $paramtypesmap = array(
        'payItem' => 'integer',
        'payItemName' => 'string',
        'hoursAccrued' => 'float',
        'hoursUsed' => 'float',
        'hoursBalance' => 'float',
    );
}
