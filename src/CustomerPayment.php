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
 * CustomerPayment.
 */
class CustomerPayment extends Record
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
    public $arAcct;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $pending;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $payment;
    /**
     * @var bool
     */
    public $autoApply;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
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
    public $checkNum;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var RecordRef
     */
    public $creditCard;
    /**
     * @var bool
     */
    public $chargeIt;
    /**
     * @var string
     */
    public $ccNumber;
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
     * @var string
     */
    public $authCode;
    /**
     * @var AvsMatchCode
     */
    public $ccAvsStreetMatch;
    /**
     * @var AvsMatchCode
     */
    public $ccAvsZipMatch;
    /**
     * @var bool
     */
    public $isRecurringPayment;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var bool
     */
    public $ignoreAvs;
    /**
     * @var AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var dateTime
     */
    public $validFrom;
    /**
     * @var bool
     */
    public $undepFunds;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var float
     */
    public $applied;
    /**
     * @var float
     */
    public $unapplied;
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
     * @var CustomerPaymentHandlingMode
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
     * @var CustomerPaymentPaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * @var string
     */
    public $status;
    /**
     * @var CustomerPaymentApplyList
     */
    public $applyList;
    /**
     * @var CustomerPaymentCreditList
     */
    public $creditList;
    /**
     * @var CustomerPaymentDepositList
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'arAcct' => 'RecordRef',
        'customer' => 'RecordRef',
        'balance' => 'float',
        'pending' => 'float',
        'currency' => 'RecordRef',
        'payment' => 'float',
        'autoApply' => 'boolean',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'postingPeriod' => 'RecordRef',
        'paymentMethod' => 'RecordRef',
        'ccIsPurchaseCardBin' => 'boolean',
        'memo' => 'string',
        'ccProcessAsPurchaseCard' => 'boolean',
        'checkNum' => 'string',
        'currencyName' => 'string',
        'exchangeRate' => 'float',
        'creditCard' => 'RecordRef',
        'chargeIt' => 'boolean',
        'ccNumber' => 'string',
        'ccExpireDate' => 'dateTime',
        'ccName' => 'string',
        'ccStreet' => 'string',
        'ccZipCode' => 'string',
        'ccApproved' => 'boolean',
        'authCode' => 'string',
        'ccAvsStreetMatch' => 'AvsMatchCode',
        'ccAvsZipMatch' => 'AvsMatchCode',
        'isRecurringPayment' => 'boolean',
        'ccSecurityCode' => 'string',
        'ignoreAvs' => 'boolean',
        'ccSecurityCodeMatch' => 'AvsMatchCode',
        'threeDStatusCode' => 'string',
        'pnRefNum' => 'string',
        'creditCardProcessor' => 'RecordRef',
        'debitCardIssueNo' => 'string',
        'validFrom' => 'dateTime',
        'undepFunds' => 'boolean',
        'account' => 'RecordRef',
        'total' => 'float',
        'subsidiary' => 'RecordRef',
        'applied' => 'float',
        'unapplied' => 'float',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'paymentOption' => 'RecordRef',
        'inputAuthCode' => 'string',
        'inputReferenceCode' => 'string',
        'checkNumber' => 'string',
        'paymentCardCsc' => 'string',
        'paymentProcessingProfile' => 'RecordRef',
        'handlingMode' => 'CustomerPaymentHandlingMode',
        'outputAuthCode' => 'string',
        'outputReferenceCode' => 'string',
        'paymentOperation' => 'CustomerPaymentPaymentOperation',
        'dynamicDescriptor' => 'string',
        'status' => 'string',
        'applyList' => 'CustomerPaymentApplyList',
        'creditList' => 'CustomerPaymentCreditList',
        'depositList' => 'CustomerPaymentDepositList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
