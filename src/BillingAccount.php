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
 * BillingAccount.
 */
class BillingAccount extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $idNumber;
    /**
     * @var bool
     */
    public $customerDefault;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $inactive;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var string
     */
    public $createdBy;
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
     * @var RecordRef
     */
    public $billingSchedule;
    /**
     * @var BillingAccountFrequency
     */
    public $frequency;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $lastBillDate;
    /**
     * @var dateTime
     */
    public $lastBillCycleDate;
    /**
     * @var dateTime
     */
    public $nextBillCycleDate;
    /**
     * @var RecordRef
     */
    public $invoiceForm;
    /**
     * @var RecordRef
     */
    public $cashSaleForm;
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
        'customForm' => 'RecordRef',
        'idNumber' => 'string',
        'customerDefault' => 'boolean',
        'customer' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'name' => 'string',
        'inactive' => 'boolean',
        'memo' => 'string',
        'createdDate' => 'dateTime',
        'createdBy' => 'string',
        'currency' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'billingSchedule' => 'RecordRef',
        'frequency' => 'BillingAccountFrequency',
        'startDate' => 'dateTime',
        'lastBillDate' => 'dateTime',
        'lastBillCycleDate' => 'dateTime',
        'nextBillCycleDate' => 'dateTime',
        'invoiceForm' => 'RecordRef',
        'cashSaleForm' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
