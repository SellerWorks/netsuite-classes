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
 * PaycheckPayContrib.
 */
class PaycheckPayContrib
{
    /**
     * @var RecordRef
     */
    public $payItem;
    /**
     * @var int
     */
    public $line;
    /**
     * @var float
     */
    public $wageBase;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var bool
     */
    public $manualEntry;

    public static $paramtypesmap = [
        'payItem' => 'RecordRef',
        'line' => 'integer',
        'wageBase' => 'float',
        'amount' => 'float',
        'manualEntry' => 'boolean',
    ];
}
