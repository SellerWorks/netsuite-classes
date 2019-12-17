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
 * BudgetSearch.
 */
class BudgetSearch extends SearchRecord
{
    /**
     * @var BudgetSearchBasic
     */
    public $basic;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BudgetSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
