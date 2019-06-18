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
 * BudgetExchangeRate.
 */
class BudgetExchangeRate
{
    /**
     * @var RecordRef
     */
    public $period;
    /**
     * @var RecordRef
     */
    public $fromSubsidiary;
    /**
     * @var RecordRef
     */
    public $toSubsidiary;
    /**
     * @var float
     */
    public $currentRate;
    /**
     * @var float
     */
    public $averageRate;
    /**
     * @var float
     */
    public $historicalRate;

    public static $paramtypesmap = array(
        'period' => 'RecordRef',
        'fromSubsidiary' => 'RecordRef',
        'toSubsidiary' => 'RecordRef',
        'currentRate' => 'float',
        'averageRate' => 'float',
        'historicalRate' => 'float',
    );
}
