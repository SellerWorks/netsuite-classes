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
 * CustomerRefundDeposit.
 */
class CustomerRefundDeposit
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var int
     */
    public $doc;
    /**
     * @var int
     */
    public $line;
    /**
     * @var dateTime
     */
    public $depositDate;
    /**
     * @var string
     */
    public $refNum;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $remaining;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        'apply' => 'boolean',
        'doc' => 'integer',
        'line' => 'integer',
        'depositDate' => 'dateTime',
        'refNum' => 'string',
        'total' => 'float',
        'remaining' => 'float',
        'currency' => 'string',
        'amount' => 'float',
    );
}
