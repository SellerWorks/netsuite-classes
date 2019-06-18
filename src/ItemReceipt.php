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
 * ItemReceipt.
 */
class ItemReceipt extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $inboundShipment;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $itemFulfillment;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var LandedCostMethod
     */
    public $landedCostMethod;
    /**
     * @var bool
     */
    public $landedCostPerLine;
    /**
     * @var ItemReceiptItemList
     */
    public $itemList;
    /**
     * @var ItemReceiptExpenseList
     */
    public $expenseList;
    /**
     * @var PurchLandedCostList
     */
    public $landedCostsList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'exchangeRate' => 'float',
        'entity' => 'RecordRef',
        'currencyName' => 'string',
        'subsidiary' => 'RecordRef',
        'createdFrom' => 'RecordRef',
        'tranDate' => 'dateTime',
        'partner' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'tranId' => 'string',
        'inboundShipment' => 'RecordRef',
        'memo' => 'string',
        'itemFulfillment' => 'RecordRef',
        'currency' => 'RecordRef',
        'landedCostMethod' => 'LandedCostMethod',
        'landedCostPerLine' => 'boolean',
        'itemList' => 'ItemReceiptItemList',
        'expenseList' => 'ItemReceiptExpenseList',
        'landedCostsList' => 'PurchLandedCostList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
