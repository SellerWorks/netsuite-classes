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
 * CostCategorySearch.
 */
class CostCategorySearch extends SearchRecord
{
    /**
     * @var CostCategorySearchBasic
     */
    public $basic;
    /**
     * @var AccountSearchBasic
     */
    public $accountJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;

    public static $paramtypesmap = array(
        'basic' => 'CostCategorySearchBasic',
        'accountJoin' => 'AccountSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
    );
}
