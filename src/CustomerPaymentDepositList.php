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
 * CustomerPaymentDepositList.
 */
class CustomerPaymentDepositList
{
    /**
     * @var CustomerPaymentDeposit[]
     */
    public $deposit;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'deposit' => 'CustomerPaymentDeposit[]',
        'replaceAll' => 'boolean',
    ];
}