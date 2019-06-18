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
 * BudgetExchangeRateFilter.
 */
class BudgetExchangeRateFilter
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

    public static $paramtypesmap = [
        'period' => 'RecordRef',
        'fromSubsidiary' => 'RecordRef',
        'toSubsidiary' => 'RecordRef',
    ];
}
