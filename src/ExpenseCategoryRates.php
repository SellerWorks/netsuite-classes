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
 * ExpenseCategoryRates.
 */
class ExpenseCategoryRates
{
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $defaultRate;

    public static $paramtypesmap = [
        'subsidiary' => 'RecordRef',
        'currency' => 'RecordRef',
        'defaultRate' => 'float',
    ];
}
