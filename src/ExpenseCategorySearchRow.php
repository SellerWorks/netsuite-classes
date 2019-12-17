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
 * ExpenseCategorySearchRow.
 */
class ExpenseCategorySearchRow extends SearchRow
{
    /**
     * @var ExpenseCategorySearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ExpenseCategorySearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
