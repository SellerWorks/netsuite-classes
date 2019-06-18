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
 * CreditMemoApply.
 */
class CreditMemoApply
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
    /**
     * @var int
     */
    public $line;

    public static $paramtypesmap = array(
        'apply' => 'boolean',
        'doc' => 'integer',
        'applyDate' => 'dateTime',
        'job' => 'string',
        'type' => 'string',
        'refNum' => 'string',
        'total' => 'float',
        'due' => 'float',
        'currency' => 'string',
        'amount' => 'float',
        'line' => 'integer',
    );
}
