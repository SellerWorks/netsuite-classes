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
 * VendorCreditApply.
 */
class VendorCreditApply
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var dateTime
     */
    public $applyDate;
    /**
     * @var int
     */
    public $doc;
    /**
     * @var int
     */
    public $line;
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
        'applyDate' => 'dateTime',
        'doc' => 'integer',
        'line' => 'integer',
        'type' => 'string',
        'refNum' => 'string',
        'total' => 'float',
        'due' => 'float',
        'currency' => 'string',
        'amount' => 'float',
    ];
}
