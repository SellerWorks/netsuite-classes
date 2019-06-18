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
 * CustomerRefundApply.
 */
class CustomerRefundApply
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
    public $applyDate;
    /**
     * @var string
     */
    public $type;
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
    public $due;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = [
        'apply' => 'boolean',
        'doc' => 'integer',
        'line' => 'integer',
        'applyDate' => 'dateTime',
        'type' => 'string',
        'refNum' => 'string',
        'total' => 'float',
        'due' => 'float',
        'currency' => 'string',
        'amount' => 'float',
    ];
}