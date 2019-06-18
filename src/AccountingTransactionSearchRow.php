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
 * AccountingTransactionSearchRow.
 */
class AccountingTransactionSearchRow extends SearchRow
{
    /**
     * @var AccountingTransactionSearchRowBasic
     */
    public $basic;
    /**
     * @var AccountSearchRowBasic
     */
    public $accountJoin;
    /**
     * @var RevRecScheduleSearchRowBasic
     */
    public $revRecScheduleJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;

    public static $paramtypesmap = array(
        'basic' => 'AccountingTransactionSearchRowBasic',
        'accountJoin' => 'AccountSearchRowBasic',
        'revRecScheduleJoin' => 'RevRecScheduleSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
    );
}
