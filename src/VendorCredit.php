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
 * VendorCredit.
 */
class VendorCredit extends Record
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
    public $account;
    /**
     * @var float
     */
    public $unApplied;
    /**
     * @var RecordRef
     */
    public $billAddressList;
    /**
     * @var bool
     */
    public $autoApply;
    /**
     * @var float
     */
    public $applied;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $userTotal;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var Address
     */
    public $billingAddress;
    /**
     * @var dateTime
     */
    public $tranDate;
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
     * @var float
     */
    public $userTaxTotal;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var VendorCreditExpenseList
     */
    public $expenseList;
    /**
     * @var VendorCreditItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var VendorCreditApplyList
     */
    public $applyList;
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
        'account' => 'RecordRef',
        'unApplied' => 'float',
        'billAddressList' => 'RecordRef',
        'autoApply' => 'boolean',
        'applied' => 'float',
        'transactionNumber' => 'string',
        'tranId' => 'string',
        'createdFrom' => 'RecordRef',
        'entity' => 'RecordRef',
        'total' => 'float',
        'userTotal' => 'float',
        'currency' => 'RecordRef',
        'currencyName' => 'string',
        'billingAddress' => 'Address',
        'tranDate' => 'dateTime',
        'exchangeRate' => 'float',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'userTaxTotal' => 'float',
        'postingPeriod' => 'RecordRef',
        'memo' => 'string',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'expenseList' => 'VendorCreditExpenseList',
        'itemList' => 'VendorCreditItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'applyList' => 'VendorCreditApplyList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
