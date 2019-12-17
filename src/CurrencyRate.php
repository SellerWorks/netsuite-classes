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
 * CurrencyRate.
 */
class CurrencyRate extends Record
{
    /**
     * @var RecordRef
     */
    public $baseCurrency;
    /**
     * @var RecordRef
     */
    public $transactionCurrency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var dateTime
     */
    public $effectiveDate;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'baseCurrency' => 'RecordRef',
        'transactionCurrency' => 'RecordRef',
        'exchangeRate' => 'float',
        'effectiveDate' => 'dateTime',
        'internalId' => 'string',
    ];
}
