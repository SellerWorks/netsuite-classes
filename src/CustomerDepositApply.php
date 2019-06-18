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
 * CustomerDepositApply.
 */
class CustomerDepositApply
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
    public $amount;
    /**
     * @var string
     */
    public $job;

    public static $paramtypesmap = array(
        'doc' => 'integer',
        'line' => 'integer',
        'apply' => 'boolean',
        'applyDate' => 'dateTime',
        'type' => 'string',
        'refNum' => 'string',
        'total' => 'float',
        'amount' => 'float',
        'job' => 'string',
    );
}
