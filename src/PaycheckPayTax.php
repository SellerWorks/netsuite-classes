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
 * PaycheckPayTax.
 */
class PaycheckPayTax
{
    /**
     * @var int
     */
    public $line;
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var string
     */
    public $payTax;
    /**
     * @var int
     */
    public $payItem;
    /**
     * @var float
     */
    public $taxableWageBase;
    /**
     * @var float
     */
    public $taxedWageBase;
    /**
     * @var float
     */
    public $reportableWageBase;
    /**
     * @var bool
     */
    public $isExempt;
    /**
     * @var bool
     */
    public $isResidentTax;
    /**
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        'line' => 'integer',
        'apply' => 'boolean',
        'payTax' => 'string',
        'payItem' => 'integer',
        'taxableWageBase' => 'float',
        'taxedWageBase' => 'float',
        'reportableWageBase' => 'float',
        'isExempt' => 'boolean',
        'isResidentTax' => 'boolean',
        'amount' => 'float',
    );
}
