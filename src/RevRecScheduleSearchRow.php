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
 * RevRecScheduleSearchRow.
 */
class RevRecScheduleSearchRow extends SearchRow
{
    /**
     * @var RevRecScheduleSearchRowBasic
     */
    public $basic;
    /**
     * @var TransactionSearchRowBasic
     */
    public $appliedToTransactionJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'RevRecScheduleSearchRowBasic',
        'appliedToTransactionJoin' => 'TransactionSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
