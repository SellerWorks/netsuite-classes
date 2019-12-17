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
 * CustomerRefund.
 */
class CustomerRefund extends Record
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
     * @var string
     */
    public $transactionNumber;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var RecordRef
     */
    public $arAcct;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $address;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $currency;
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
    public $memo;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var RecordRef
     */
    public $account;
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
    public $debitCardIssueNo;
    /**
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var bool
     */
    public $chargeIt;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var dateTime
     */
    public $validFrom;
    /**
     * @var RecordRef
     */
    public $subsidiary;
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
    public $paymentOption;
    /**
     * @var string
     */
    public $inputAuthCode;
    /**
     * @var string
     */
    public $inputReferenceCode;
    /**
     * @var string
     */
    public $checkNumber;
    /**
     * @var string
     */
    public $paymentCardCsc;
    /**
     * @var RecordRef
     */
    public $paymentProcessingProfile;
    /**
     * @var CustomerRefundHandlingMode
     */
    public $handlingMode;
    /**
     * @var string
     */
    public $outputAuthCode;
    /**
     * @var string
     */
    public $outputReferenceCode;
    /**
     * @var CustomerRefundPaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * @var RecordRef
     */
    public $creditCard;
    /**
     * @var bool
     */
    public $ccIsPurchaseCardBin;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var bool
     */
    public $ccProcessAsPurchaseCard;
    /**
     * @var dateTime
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $ccName;
    /**
     * @var string
     */
    public $ccStreet;
    /**
     * @var string
     */
    public $ccZipCode;
    /**
     * @var bool
     */
    public $ccApproved;
    /**
     * @var CustomerRefundApplyList
     */
    public $applyList;
    /**
     * @var CustomerRefundDepositList
     */
    public $depositList;
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

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'status' => 'string',
        'transactionNumber' => 'string',
        'customer' => 'RecordRef',
        'customForm' => 'RecordRef',
        'balance' => 'float',
        'arAcct' => 'RecordRef',
        'currencyName' => 'string',
        'exchangeRate' => 'float',
        'address' => 'string',
        'total' => 'float',
        'currency' => 'RecordRef',
        'tranDate' => 'dateTime',
        'voidJournal' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'memo' => 'string',
        'paymentMethod' => 'RecordRef',
        'account' => 'RecordRef',
        'toBePrinted' => 'boolean',
        'tranId' => 'string',
        'debitCardIssueNo' => 'string',
        'creditCardProcessor' => 'RecordRef',
        'chargeIt' => 'boolean',
        'pnRefNum' => 'string',
        'validFrom' => 'dateTime',
        'subsidiary' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'paymentOption' => 'RecordRef',
        'inputAuthCode' => 'string',
        'inputReferenceCode' => 'string',
        'checkNumber' => 'string',
        'paymentCardCsc' => 'string',
        'paymentProcessingProfile' => 'RecordRef',
        'handlingMode' => 'CustomerRefundHandlingMode',
        'outputAuthCode' => 'string',
        'outputReferenceCode' => 'string',
        'paymentOperation' => 'CustomerRefundPaymentOperation',
        'dynamicDescriptor' => 'string',
        'creditCard' => 'RecordRef',
        'ccIsPurchaseCardBin' => 'boolean',
        'ccNumber' => 'string',
        'ccProcessAsPurchaseCard' => 'boolean',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'ccApproved' => 'boolean',
        'applyList' => 'CustomerRefundApplyList',
        'depositList' => 'CustomerRefundDepositList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
