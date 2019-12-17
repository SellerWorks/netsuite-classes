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
 * VendorPayment.
 */
class VendorPayment extends Record
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
    public $apAcct;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $address;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $voidJournal;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var bool
     */
    public $toAch;
    /**
     * @var bool
     */
    public $toBePrinted;
    /**
     * @var bool
     */
    public $printVoucher;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $class;
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
     * @var VendorPaymentApplyList
     */
    public $applyList;
    /**
     * @var VendorPaymentCreditList
     */
    public $creditList;
    /**
     * @var bool
     */
    public $billPay;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var float
     */
    public $availableBalance;
    /**
     * @var bool
     */
    public $isInTransitPayment;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var RecordRef
     */
    public $nextApprover;
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
        'customForm' => 'RecordRef',
        'account' => 'RecordRef',
        'balance' => 'float',
        'apAcct' => 'RecordRef',
        'entity' => 'RecordRef',
        'address' => 'string',
        'tranDate' => 'dateTime',
        'voidJournal' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'currencyName' => 'string',
        'exchangeRate' => 'float',
        'toAch' => 'boolean',
        'toBePrinted' => 'boolean',
        'printVoucher' => 'boolean',
        'tranId' => 'string',
        'total' => 'float',
        'currency' => 'RecordRef',
        'department' => 'RecordRef',
        'memo' => 'string',
        'subsidiary' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'status' => 'string',
        'transactionNumber' => 'string',
        'applyList' => 'VendorPaymentApplyList',
        'creditList' => 'VendorPaymentCreditList',
        'billPay' => 'boolean',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'availableBalance' => 'float',
        'isInTransitPayment' => 'boolean',
        'approvalStatus' => 'RecordRef',
        'nextApprover' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
