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
 * RevRecScheduleSearch.
 */
class RevRecScheduleSearch extends SearchRecord
{
    /**
     * @var RevRecScheduleSearchBasic
     */
    public $basic;
    /**
     * @var TransactionSearchBasic
     */
    public $appliedToTransactionJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'RevRecScheduleSearchBasic',
        'appliedToTransactionJoin' => 'TransactionSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    );
}
