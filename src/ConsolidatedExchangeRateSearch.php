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
 * ConsolidatedExchangeRateSearch.
 */
class ConsolidatedExchangeRateSearch extends SearchRecord
{
    /**
     * @var ConsolidatedExchangeRateSearchBasic
     */
    public $basic;
    /**
     * @var SubsidiarySearchBasic
     */
    public $fromSubsidiaryJoin;
    /**
     * @var AccountingPeriodSearchBasic
     */
    public $periodJoin;
    /**
     * @var SubsidiarySearchBasic
     */
    public $toSubsidiaryJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'ConsolidatedExchangeRateSearchBasic',
        'fromSubsidiaryJoin' => 'SubsidiarySearchBasic',
        'periodJoin' => 'AccountingPeriodSearchBasic',
        'toSubsidiaryJoin' => 'SubsidiarySearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    );
}
