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
 * ItemReceiptExpenseList.
 */
class ItemReceiptExpenseList
{
    /**
     * @var ItemReceiptExpense[]
     */
    public $expense;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'expense' => 'ItemReceiptExpense[]',
        'replaceAll' => 'boolean',
    );
}
