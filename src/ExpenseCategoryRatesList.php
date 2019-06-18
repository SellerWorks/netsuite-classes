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
 * ExpenseCategoryRatesList.
 */
class ExpenseCategoryRatesList
{
    /**
     * @var ExpenseCategoryRates[]
     */
    public $expenseCategoryRates;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'expenseCategoryRates' => 'ExpenseCategoryRates[]',
        'replaceAll' => 'boolean',
    ];
}
