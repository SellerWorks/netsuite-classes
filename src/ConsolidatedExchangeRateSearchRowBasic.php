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
 * ConsolidatedExchangeRateSearchRowBasic.
 */
class ConsolidatedExchangeRateSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnStringField[]
     */
    public $averageRate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $closed;
    /**
     * @var SearchColumnStringField[]
     */
    public $currentRate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $fromCurrency;
    /**
     * @var SearchColumnStringField[]
     */
    public $fromSubsidiary;
    /**
     * @var SearchColumnStringField[]
     */
    public $historicalRate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnDateField[]
     */
    public $periodEndDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $periodName;
    /**
     * @var SearchColumnDateField[]
     */
    public $periodStartDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $toCurrency;
    /**
     * @var SearchColumnStringField[]
     */
    public $toSubsidiary;

    public static $paramtypesmap = array(
        'accountingBook' => 'SearchColumnStringField[]',
        'averageRate' => 'SearchColumnStringField[]',
        'closed' => 'SearchColumnBooleanField[]',
        'currentRate' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fromCurrency' => 'SearchColumnStringField[]',
        'fromSubsidiary' => 'SearchColumnStringField[]',
        'historicalRate' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'periodEndDate' => 'SearchColumnDateField[]',
        'periodName' => 'SearchColumnStringField[]',
        'periodStartDate' => 'SearchColumnDateField[]',
        'toCurrency' => 'SearchColumnStringField[]',
        'toSubsidiary' => 'SearchColumnStringField[]',
    );
}
