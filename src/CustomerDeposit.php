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
 * CustomerDeposit.
 */
class CustomerDeposit extends Record
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
    public $customer;
    /**
     * @var RecordRef
     */
    public $salesOrder;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var float
     */
    public $payment;
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
    public $postingPeriod;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var bool
     */
    public $ccIsPurchaseCardBin;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $ccProcessAsPurchaseCard;
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
    public $checkNum;
    /**
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var RecordRef
     */
    public $creditCard;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var string
     */
    public $ccNumber;
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
     * @var CustomerDepositHandlingMode
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
     * @var CustomerDepositPaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * @var dateTime
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var dateTime
     */
    public $validFrom;
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
    public $chargeIt;
    /**
     * @var bool
     */
    public $ccApproved;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var AvsMatchCode
     */
    public $ccAvsStreetMatch;
    /**
     * @var string
     */
    public $softDescriptor;
    /**
     * @var AvsMatchCode
     */
    public $ccAvsZipMatch;
    /**
     * @var bool
     */
    public $isRecurringPayment;
    /**
     * @var AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var bool
     */
    public $ignoreAvs;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var bool
     */
    public $undepFunds;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var CustomerDepositApplyList
     */
    public $applyList;
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
        'customer' => 'RecordRef',
        'salesOrder' => 'RecordRef',
        'customForm' => 'RecordRef',
        'payment' => 'float',
        'currency' => 'RecordRef',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'paymentMethod' => 'RecordRef',
        'ccIsPurchaseCardBin' => 'boolean',
        'memo' => 'string',
        'ccProcessAsPurchaseCard' => 'boolean',
        'currencyName' => 'string',
        'exchangeRate' => 'float',
        'checkNum' => 'string',
        'creditCardProcessor' => 'RecordRef',
        'creditCard' => 'RecordRef',
        'ccSecurityCode' => 'string',
        'ccNumber' => 'string',
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
        'handlingMode' => 'CustomerDepositHandlingMode',
        'outputAuthCode' => 'string',
        'outputReferenceCode' => 'string',
        'paymentOperation' => 'CustomerDepositPaymentOperation',
        'dynamicDescriptor' => 'string',
        'ccExpireDate' => 'dateTime',
        'debitCardIssueNo' => 'string',
        'validFrom' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'chargeIt' => 'boolean',
        'ccApproved' => 'boolean',
        'pnRefNum' => 'string',
        'authCode' => 'string',
        'ccAvsStreetMatch' => 'AvsMatchCode',
        'softDescriptor' => 'string',
        'ccAvsZipMatch' => 'AvsMatchCode',
        'isRecurringPayment' => 'boolean',
        'ccSecurityCodeMatch' => 'AvsMatchCode',
        'threeDStatusCode' => 'string',
        'ignoreAvs' => 'boolean',
        'account' => 'RecordRef',
        'undepFunds' => 'boolean',
        'tranId' => 'string',
        'applyList' => 'CustomerDepositApplyList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
