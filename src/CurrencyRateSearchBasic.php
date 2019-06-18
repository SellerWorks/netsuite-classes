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
 * CurrencyRateSearchBasic.
 */
class CurrencyRateSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $baseCurrency;
    /**
     * @var SearchDateField
     */
    public $effectiveDate;
    /**
     * @var SearchDoubleField
     */
    public $exchangeRate;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $transactionCurrency;

    public static $paramtypesmap = array(
        'baseCurrency' => 'SearchMultiSelectField',
        'effectiveDate' => 'SearchDateField',
        'exchangeRate' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'transactionCurrency' => 'SearchMultiSelectField',
    );
}
