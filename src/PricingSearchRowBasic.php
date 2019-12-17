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
 * PricingSearchRowBasic.
 */
class PricingSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $maximumQuantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $minimumQuantity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $priceLevel;
    /**
     * @var SearchColumnStringField[]
     */
    public $quantityRange;
    /**
     * @var SearchColumnSelectField[]
     */
    public $saleUnit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitPrice;

    public static $paramtypesmap = [
        'currency' => 'SearchColumnSelectField[]',
        'customer' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'maximumQuantity' => 'SearchColumnDoubleField[]',
        'minimumQuantity' => 'SearchColumnDoubleField[]',
        'priceLevel' => 'SearchColumnSelectField[]',
        'quantityRange' => 'SearchColumnStringField[]',
        'saleUnit' => 'SearchColumnSelectField[]',
        'unitPrice' => 'SearchColumnDoubleField[]',
    ];
}
