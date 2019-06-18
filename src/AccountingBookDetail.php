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
 * AccountingBookDetail.
 */
class AccountingBookDetail
{
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;

    public static $paramtypesmap = array(
        'accountingBook' => 'RecordRef',
        'currency' => 'RecordRef',
        'exchangeRate' => 'float',
    );
}
