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
 * AccountingTransactionSearch.
 */
class AccountingTransactionSearch extends SearchRecord
{
    /**
     * @var AccountingTransactionSearchBasic
     */
    public $basic;
    /**
     * @var AccountSearchBasic
     */
    public $accountJoin;
    /**
     * @var RevRecScheduleSearchBasic
     */
    public $revRecScheduleJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;

    public static $paramtypesmap = [
        'basic' => 'AccountingTransactionSearchBasic',
        'accountJoin' => 'AccountSearchBasic',
        'revRecScheduleJoin' => 'RevRecScheduleSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
    ];
}
