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
 * VendorBill.
 */
class VendorBill extends Record
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
    public $approvalStatus;
    /**
     * @var RecordRef
     */
    public $nextApprover;
    /**
     * @var string
     */
    public $vatRegNum;
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
     * @var dateTime
     */
    public $taxPointDate;
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
     * @var float
     */
    public $tax2Total;
    /**
     * @var float
     */
    public $creditLimit;
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
     * @var VendorBillExpenseList
     */
    public $expenseList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var VendorBillItemList
     */
    public $itemList;
    /**
     * @var PurchLandedCostList
     */
    public $landedCostsList;
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
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'customForm' => 'RecordRef',
        'billAddressList' => 'RecordRef',
        'account' => 'RecordRef',
        'entity' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'approvalStatus' => 'RecordRef',
        'nextApprover' => 'RecordRef',
        'vatRegNum' => 'string',
        'postingPeriod' => 'RecordRef',
        'tranDate' => 'dateTime',
        'currencyName' => 'string',
        'billingAddress' => 'Address',
        'exchangeRate' => 'float',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'terms' => 'RecordRef',
        'dueDate' => 'dateTime',
        'discountDate' => 'dateTime',
        'tranId' => 'string',
        'userTotal' => 'float',
        'discountAmount' => 'float',
        'taxTotal' => 'float',
        'paymentHold' => 'boolean',
        'memo' => 'string',
        'tax2Total' => 'float',
        'creditLimit' => 'float',
        'availableVendorCredit' => 'float',
        'currency' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'status' => 'string',
        'landedCostMethod' => 'LandedCostMethod',
        'landedCostPerLine' => 'boolean',
        'transactionNumber' => 'string',
        'expenseList' => 'VendorBillExpenseList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'itemList' => 'VendorBillItemList',
        'landedCostsList' => 'PurchLandedCostList',
        'purchaseOrderList' => 'RecordRefList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
