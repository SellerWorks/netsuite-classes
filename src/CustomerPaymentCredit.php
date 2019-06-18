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
 * CustomerPaymentCredit.
 */
class CustomerPaymentCredit
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
    public $creditDate;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $refNum;
    /**
     * @var string
     */
    public $appliedTo;
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

    public static $paramtypesmap = array(
        'apply' => 'boolean',
        'doc' => 'integer',
        'line' => 'integer',
        'creditDate' => 'dateTime',
        'type' => 'string',
        'refNum' => 'string',
        'appliedTo' => 'string',
        'total' => 'float',
        'due' => 'float',
        'currency' => 'string',
        'amount' => 'float',
    );
}
