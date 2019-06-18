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
 * Currency.
 */
class Currency extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $symbol;
    /**
     * @var bool
     */
    public $isBaseCurrency;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $overrideCurrencyFormat;
    /**
     * @var string
     */
    public $displaySymbol;
    /**
     * @var CurrencySymbolPlacement
     */
    public $symbolPlacement;
    /**
     * @var CurrencyLocale
     */
    public $locale;
    /**
     * @var string
     */
    public $formatSample;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var CurrencyFxRateUpdateTimezone
     */
    public $fxRateUpdateTimezone;
    /**
     * @var bool
     */
    public $inclInFxRateUpdates;
    /**
     * @var CurrencyCurrencyPrecision
     */
    public $currencyPrecision;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'symbol' => 'string',
        'isBaseCurrency' => 'boolean',
        'isInactive' => 'boolean',
        'overrideCurrencyFormat' => 'boolean',
        'displaySymbol' => 'string',
        'symbolPlacement' => 'CurrencySymbolPlacement',
        'locale' => 'CurrencyLocale',
        'formatSample' => 'string',
        'exchangeRate' => 'float',
        'fxRateUpdateTimezone' => 'CurrencyFxRateUpdateTimezone',
        'inclInFxRateUpdates' => 'boolean',
        'currencyPrecision' => 'CurrencyCurrencyPrecision',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
