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
 * CashRefundSalesTeamList.
 */
class CashRefundSalesTeamList
{
    /**
     * @var CashRefundSalesTeam[]
     */
    public $salesTeam;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'salesTeam' => 'CashRefundSalesTeam[]',
        'replaceAll' => 'boolean',
    ];
}
