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
 * ConsolidatedExchangeRate.
 */
class ConsolidatedExchangeRate extends Record
{
    /**
     * @var string
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $fromSubsidiary;
    /**
     * @var string
     */
    public $fromCurrency;
    /**
     * @var string
     */
    public $toSubsidiary;
    /**
     * @var string
     */
    public $toCurrency;
    /**
     * @var float
     */
    public $averageRate;
    /**
     * @var float
     */
    public $currentRate;
    /**
     * @var float
     */
    public $historicalRate;
    /**
     * @var string
     */
    public $accountingBook;
    /**
     * @var bool
     */
    public $isPeriodClosed;
    /**
     * @var bool
     */
    public $isDerived;
    /**
     * @var bool
     */
    public $isEliminationSubsidiary;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'postingPeriod' => 'string',
        'fromSubsidiary' => 'string',
        'fromCurrency' => 'string',
        'toSubsidiary' => 'string',
        'toCurrency' => 'string',
        'averageRate' => 'float',
        'currentRate' => 'float',
        'historicalRate' => 'float',
        'accountingBook' => 'string',
        'isPeriodClosed' => 'boolean',
        'isDerived' => 'boolean',
        'isEliminationSubsidiary' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
