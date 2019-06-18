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
 * CustomerCurrency.
 */
class CustomerCurrency
{
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $consolBalance;
    /**
     * @var float
     */
    public $depositBalance;
    /**
     * @var float
     */
    public $consolDepositBalance;
    /**
     * @var float
     */
    public $overdueBalance;
    /**
     * @var float
     */
    public $consolOverdueBalance;
    /**
     * @var float
     */
    public $unbilledOrders;
    /**
     * @var float
     */
    public $consolUnbilledOrders;
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

    public static $paramtypesmap = array(
        'currency' => 'RecordRef',
        'balance' => 'float',
        'consolBalance' => 'float',
        'depositBalance' => 'float',
        'consolDepositBalance' => 'float',
        'overdueBalance' => 'float',
        'consolOverdueBalance' => 'float',
        'unbilledOrders' => 'float',
        'consolUnbilledOrders' => 'float',
        'overrideCurrencyFormat' => 'boolean',
        'displaySymbol' => 'string',
        'symbolPlacement' => 'CurrencySymbolPlacement',
    );
}
