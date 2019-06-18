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
 * CurrencyRateSearchRowBasic.
 */
class CurrencyRateSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $baseCurrency;
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $exchangeRate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $transactionCurrency;

    public static $paramtypesmap = array(
        'baseCurrency' => 'SearchColumnSelectField[]',
        'effectiveDate' => 'SearchColumnDateField[]',
        'exchangeRate' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'transactionCurrency' => 'SearchColumnSelectField[]',
    );
}
