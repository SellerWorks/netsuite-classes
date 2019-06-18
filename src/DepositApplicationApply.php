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
 * DepositApplicationApply.
 */
class DepositApplicationApply
{
    /**
     * @var int
     */
    public $doc;
    /**
     * @var int
     */
    public $line;
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var dateTime
     */
    public $applyDate;
    /**
     * @var string
     */
    public $job;
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

    public static $paramtypesmap = array(
        'doc' => 'integer',
        'line' => 'integer',
        'apply' => 'boolean',
        'applyDate' => 'dateTime',
        'job' => 'string',
        'type' => 'string',
        'refNum' => 'string',
        'total' => 'float',
        'due' => 'float',
        'currency' => 'string',
        'amount' => 'float',
    );
}
