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
 * PaycheckPayEarn.
 */
class PaycheckPayEarn
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
    public $count;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var RecordRef
     */
    public $serviceItem;
    /**
     * @var float
     */
    public $grossAmount;
    /**
     * @var bool
     */
    public $manualEntry;

    public static $paramtypesmap = array(
        'payItem' => 'RecordRef',
        'line' => 'integer',
        'count' => 'float',
        'rate' => 'string',
        'serviceItem' => 'RecordRef',
        'grossAmount' => 'float',
        'manualEntry' => 'boolean',
    );
}
