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
 * Check.
 */
class Check extends Record
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
     * @var string
     */
    public $status;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $address;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $voidJournal;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var bool
     */
    public $toBePrinted;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var float
     */
    public $userTotal;
    /**
     * @var LandedCostMethod
     */
    public $landedCostMethod;
    /**
     * @var bool
     */
    public $landedCostPerLine;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var CheckExpenseList
     */
    public $expenseList;
    /**
     * @var CheckItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CheckLandedCostList
     */
    public $landedCostsList;
    /**
     * @var bool
     */
    public $billPay;
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

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'status' => 'string',
        'customForm' => 'RecordRef',
        'account' => 'RecordRef',
        'balance' => 'float',
        'entity' => 'RecordRef',
        'address' => 'string',
        'subsidiary' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'tranDate' => 'dateTime',
        'currency' => 'RecordRef',
        'voidJournal' => 'RecordRef',
        'exchangeRate' => 'float',
        'toBePrinted' => 'boolean',
        'tranId' => 'string',
        'memo' => 'string',
        'department' => 'RecordRef',
        'taxTotal' => 'float',
        'class' => 'RecordRef',
        'tax2Total' => 'float',
        'location' => 'RecordRef',
        'userTotal' => 'float',
        'landedCostMethod' => 'LandedCostMethod',
        'landedCostPerLine' => 'boolean',
        'transactionNumber' => 'string',
        'expenseList' => 'CheckExpenseList',
        'itemList' => 'CheckItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'landedCostsList' => 'CheckLandedCostList',
        'billPay' => 'boolean',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
