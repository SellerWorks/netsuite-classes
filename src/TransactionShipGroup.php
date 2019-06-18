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
 * TransactionShipGroup.
 */
class TransactionShipGroup
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $isFulfilled;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var RecordRef
     */
    public $sourceAddressRef;
    /**
     * @var string
     */
    public $sourceAddress;
    /**
     * @var RecordRef
     */
    public $destinationAddressRef;
    /**
     * @var string
     */
    public $destinationAddress;
    /**
     * @var RecordRef
     */
    public $shippingMethodRef;
    /**
     * @var string
     */
    public $shippingMethod;
    /**
     * @var bool
     */
    public $isHandlingTaxable;
    /**
     * @var RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var string
     */
    public $handlingTaxRate;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var float
     */
    public $handlingRate;
    /**
     * @var float
     */
    public $handlingTaxAmt;
    /**
     * @var float
     */
    public $handlingTax2Amt;
    /**
     * @var bool
     */
    public $isShippingTaxable;
    /**
     * @var RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var string
     */
    public $shippingTaxRate;
    /**
     * @var string
     */
    public $shippingTax2Rate;
    /**
     * @var float
     */
    public $shippingRate;
    /**
     * @var float
     */
    public $shippingTaxAmt;
    /**
     * @var float
     */
    public $shippingTax2Amt;

    public static $paramtypesmap = array(
        'id' => 'integer',
        'isFulfilled' => 'boolean',
        'weight' => 'float',
        'sourceAddressRef' => 'RecordRef',
        'sourceAddress' => 'string',
        'destinationAddressRef' => 'RecordRef',
        'destinationAddress' => 'string',
        'shippingMethodRef' => 'RecordRef',
        'shippingMethod' => 'string',
        'isHandlingTaxable' => 'boolean',
        'handlingTaxCode' => 'RecordRef',
        'handlingTaxRate' => 'string',
        'handlingTax2Rate' => 'string',
        'handlingRate' => 'float',
        'handlingTaxAmt' => 'float',
        'handlingTax2Amt' => 'float',
        'isShippingTaxable' => 'boolean',
        'shippingTaxCode' => 'RecordRef',
        'shippingTaxRate' => 'string',
        'shippingTax2Rate' => 'string',
        'shippingRate' => 'float',
        'shippingTaxAmt' => 'float',
        'shippingTax2Amt' => 'float',
    );
}
