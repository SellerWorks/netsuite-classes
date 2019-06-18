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
 * Deposit.
 */
class Deposit extends Record
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
     * @var string
     */
    public $currencyName;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $toBePrinted;
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
     * @var DepositPaymentList
     */
    public $paymentList;
    /**
     * @var DepositOtherList
     */
    public $otherList;
    /**
     * @var DepositCashBackList
     */
    public $cashBackList;
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
        'customForm' => 'RecordRef',
        'currencyName' => 'string',
        'tranId' => 'string',
        'account' => 'RecordRef',
        'total' => 'float',
        'exchangeRate' => 'float',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'memo' => 'string',
        'toBePrinted' => 'boolean',
        'subsidiary' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'paymentList' => 'DepositPaymentList',
        'otherList' => 'DepositOtherList',
        'cashBackList' => 'DepositCashBackList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
