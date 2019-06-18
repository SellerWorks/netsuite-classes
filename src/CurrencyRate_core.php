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
 * CurrencyRate_core.
 */
class CurrencyRate_core
{
    /**
     * @var RecordRef
     */
    public $baseCurrency;
    /**
     * @var RecordRef
     */
    public $fromCurrency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var dateTime
     */
    public $effectiveDate;

    public static $paramtypesmap = array(
        'baseCurrency' => 'RecordRef',
        'fromCurrency' => 'RecordRef',
        'exchangeRate' => 'float',
        'effectiveDate' => 'dateTime',
    );
}
