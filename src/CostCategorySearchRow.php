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
 * CostCategorySearchRow.
 */
class CostCategorySearchRow extends SearchRow
{
    /**
     * @var CostCategorySearchRowBasic
     */
    public $basic;
    /**
     * @var AccountSearchRowBasic
     */
    public $accountJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;

    public static $paramtypesmap = [
        'basic' => 'CostCategorySearchRowBasic',
        'accountJoin' => 'AccountSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
    ];
}
