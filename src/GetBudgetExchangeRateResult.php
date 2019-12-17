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
 * GetBudgetExchangeRateResult.
 */
class GetBudgetExchangeRateResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var BudgetExchangeRateList
     */
    public $budgetExchangeRateList;

    public static $paramtypesmap = [
        'status' => 'Status',
        'budgetExchangeRateList' => 'BudgetExchangeRateList',
    ];
}
