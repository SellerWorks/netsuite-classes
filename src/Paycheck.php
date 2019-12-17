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
 * Paycheck.
 */
class Paycheck extends Record
{
    /**
     * @var string
     */
    public $batchNumber;
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
    public $entity;
    /**
     * @var string
     */
    public $address;
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
    public $class;
    /**
     * @var RecordRef
     */
    public $workplace;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var float
     */
    public $userAmount;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var string
     */
    public $payFrequency;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var dateTime
     */
    public $periodEnding;
    /**
     * @var PaycheckPayEarnList
     */
    public $payEarnList;
    /**
     * @var PaycheckPayTimeList
     */
    public $payTimeList;
    /**
     * @var PaycheckPayExpList
     */
    public $payExpList;
    /**
     * @var PaycheckPayPtoList
     */
    public $payPtoList;
    /**
     * @var PaycheckPayDeductList
     */
    public $payDeductList;
    /**
     * @var PaycheckPayContribList
     */
    public $payContribList;
    /**
     * @var PaycheckPayTaxList
     */
    public $payTaxList;
    /**
     * @var PaycheckPaySummaryList
     */
    public $paySummaryList;
    /**
     * @var PaycheckPayDisburseList
     */
    public $payDisburseList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'batchNumber' => 'string',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'status' => 'string',
        'entity' => 'RecordRef',
        'address' => 'string',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'class' => 'RecordRef',
        'workplace' => 'RecordRef',
        'tranId' => 'string',
        'userAmount' => 'float',
        'memo' => 'string',
        'account' => 'RecordRef',
        'payFrequency' => 'string',
        'balance' => 'float',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'periodEnding' => 'dateTime',
        'payEarnList' => 'PaycheckPayEarnList',
        'payTimeList' => 'PaycheckPayTimeList',
        'payExpList' => 'PaycheckPayExpList',
        'payPtoList' => 'PaycheckPayPtoList',
        'payDeductList' => 'PaycheckPayDeductList',
        'payContribList' => 'PaycheckPayContribList',
        'payTaxList' => 'PaycheckPayTaxList',
        'paySummaryList' => 'PaycheckPaySummaryList',
        'payDisburseList' => 'PaycheckPayDisburseList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
