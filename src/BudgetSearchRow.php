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
 * BudgetSearchRow.
 */
class BudgetSearchRow extends SearchRow
{
    /**
     * @var BudgetSearchRowBasic
     */
    public $basic;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BudgetSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
