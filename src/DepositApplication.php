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
 * DepositApplication.
 */
class DepositApplication extends Record
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
    public $arAcct;
    /**
     * @var string
     */
    public $status;
    /**
     * @var RecordRef
     */
    public $customer;
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
    public $deposit;
    /**
     * @var dateTime
     */
    public $depDate;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var float
     */
    public $total;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $applied;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var float
     */
    public $unapplied;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var DepositApplicationApplyList
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'arAcct' => 'RecordRef',
        'status' => 'string',
        'customer' => 'RecordRef',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'deposit' => 'RecordRef',
        'depDate' => 'dateTime',
        'currency' => 'RecordRef',
        'exchangeRate' => 'float',
        'memo' => 'string',
        'subsidiary' => 'RecordRef',
        'total' => 'float',
        'department' => 'RecordRef',
        'applied' => 'float',
        'class' => 'RecordRef',
        'unapplied' => 'float',
        'location' => 'RecordRef',
        'tranId' => 'string',
        'applyList' => 'DepositApplicationApplyList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
