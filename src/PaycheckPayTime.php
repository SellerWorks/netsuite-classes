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
 * PaycheckPayTime.
 */
class PaycheckPayTime
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var int
     */
    public $line;
    /**
     * @var int
     */
    public $payItem;
    /**
     * @var string
     */
    public $payItemName;
    /**
     * @var dateTime
     */
    public $ddate;
    /**
     * @var string
     */
    public $custJob;
    /**
     * @var string
     */
    public $serviceItem;
    /**
     * @var float
     */
    public $count;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        'apply' => 'boolean',
        'line' => 'integer',
        'payItem' => 'integer',
        'payItemName' => 'string',
        'ddate' => 'dateTime',
        'custJob' => 'string',
        'serviceItem' => 'string',
        'count' => 'float',
        'rate' => 'float',
        'amount' => 'float',
    );
}
