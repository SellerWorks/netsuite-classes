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
 * CurrencyRateSearchRow.
 */
class CurrencyRateSearchRow extends SearchRow
{
    /**
     * @var CurrencyRateSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'CurrencyRateSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
