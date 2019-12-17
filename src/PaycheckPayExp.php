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
 * PaycheckPayExp.
 */
class PaycheckPayExp
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
    public $origDoc;
    /**
     * @var string
     */
    public $transaction;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = [
        'apply' => 'boolean',
        'line' => 'integer',
        'origDoc' => 'integer',
        'transaction' => 'string',
        'amount' => 'float',
    ];
}
