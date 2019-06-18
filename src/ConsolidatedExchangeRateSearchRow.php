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
 * ConsolidatedExchangeRateSearchRow.
 */
class ConsolidatedExchangeRateSearchRow extends SearchRow
{
    /**
     * @var ConsolidatedExchangeRateSearchRowBasic
     */
    public $basic;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $fromSubsidiaryJoin;
    /**
     * @var AccountingPeriodSearchRowBasic
     */
    public $periodJoin;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $toSubsidiaryJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'ConsolidatedExchangeRateSearchRowBasic',
        'fromSubsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'periodJoin' => 'AccountingPeriodSearchRowBasic',
        'toSubsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
