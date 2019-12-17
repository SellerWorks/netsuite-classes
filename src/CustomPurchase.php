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
 * CustomPurchase.
 */
class CustomPurchase extends Record
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
    public $tranType;
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var bool
     */
    public $taxRegOverride;
    /**
     * @var bool
     */
    public $taxDetailsOverride;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $billAddressList;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $entity;
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
     * @var string
     */
    public $currencyName;
    /**
     * @var Address
     */
    public $billingAddress;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var RecordRef
     */
    public $terms;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var dateTime
     */
    public $discountDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var float
     */
    public $userTotal;
    /**
     * @var float
     */
    public $discountAmount;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var bool
     */
    public $paymentHold;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $tranStatus;
    /**
     * @var float
     */
    public $availableVendorCredit;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $incoterm;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var CustomPurchaseExpenseList
     */
    public $expenseList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CustomPurchaseItemList
     */
    public $itemList;
    /**
     * @var RecordRefList
     */
    public $purchaseOrderList;
    /**
     * @var TaxDetailsList
     */
    public $taxDetailsList;
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
        'tranType' => 'RecordRef',
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'customForm' => 'RecordRef',
        'billAddressList' => 'RecordRef',
        'account' => 'RecordRef',
        'entity' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'tranDate' => 'dateTime',
        'currencyName' => 'string',
        'billingAddress' => 'Address',
        'exchangeRate' => 'float',
        'entityTaxRegNum' => 'RecordRef',
        'terms' => 'RecordRef',
        'dueDate' => 'dateTime',
        'discountDate' => 'dateTime',
        'tranId' => 'string',
        'createdFrom' => 'RecordRef',
        'userTotal' => 'float',
        'discountAmount' => 'float',
        'taxTotal' => 'float',
        'paymentHold' => 'boolean',
        'memo' => 'string',
        'tranStatus' => 'RecordRef',
        'availableVendorCredit' => 'float',
        'currency' => 'RecordRef',
        'incoterm' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'status' => 'string',
        'transactionNumber' => 'string',
        'expenseList' => 'CustomPurchaseExpenseList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'itemList' => 'CustomPurchaseItemList',
        'purchaseOrderList' => 'RecordRefList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
