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
 * VendorPaymentApply.
 */
class VendorPaymentApply
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
     * @var string
     */
    public $job;
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
     * @var dateTime
     */
    public $discDate;
    /**
     * @var float
     */
    public $discAmt;
    /**
     * @var float
     */
    public $disc;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        'apply' => 'boolean',
        'doc' => 'integer',
        'line' => 'integer',
        'job' => 'string',
        'applyDate' => 'dateTime',
        'type' => 'string',
        'refNum' => 'string',
        'total' => 'float',
        'due' => 'float',
        'currency' => 'string',
        'discDate' => 'dateTime',
        'discAmt' => 'float',
        'disc' => 'float',
        'amount' => 'float',
    );
}
