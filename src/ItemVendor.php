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
 * ItemVendor.
 */
class ItemVendor
{
    /**
     * @var RecordRef
     */
    public $vendor;
    /**
     * @var string
     */
    public $vendorCode;
    /**
     * @var string
     */
    public $vendorCurrencyName;
    /**
     * @var RecordRef
     */
    public $vendorCurrency;
    /**
     * @var float
     */
    public $purchasePrice;
    /**
     * @var bool
     */
    public $preferredVendor;
    /**
     * @var RecordRef
     */
    public $schedule;
    /**
     * @var RecordRef
     */
    public $subsidiary;

    public static $paramtypesmap = [
        'vendor' => 'RecordRef',
        'vendorCode' => 'string',
        'vendorCurrencyName' => 'string',
        'vendorCurrency' => 'RecordRef',
        'purchasePrice' => 'float',
        'preferredVendor' => 'boolean',
        'schedule' => 'RecordRef',
        'subsidiary' => 'RecordRef',
    ];
}
