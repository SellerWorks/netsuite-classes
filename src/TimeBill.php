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
 * TimeBill.
 */
class TimeBill extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $caseTaskEvent;
    /**
     * @var bool
     */
    public $isBillable;
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var bool
     */
    public $paidExternally;
    /**
     * @var RecordRef
     */
    public $workplace;
    /**
     * @var RecordRef
     */
    public $item;
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
     * @var Duration
     */
    public $hours;
    /**
     * @var RecordRef
     */
    public $price;
    /**
     * @var TimeBillTimeType
     */
    public $timeType;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var bool
     */
    public $overrideRate;
    /**
     * @var RecordRef
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var RecordRef
     */
    public $temporaryStateJurisdiction;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $rejectionNote;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var bool
     */
    public $supervisorApproval;
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
    public $timeSheet;
    /**
     * @var string
     */
    public $status;
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
        'customForm' => 'RecordRef',
        'employee' => 'RecordRef',
        'tranDate' => 'dateTime',
        'approvalStatus' => 'RecordRef',
        'customer' => 'RecordRef',
        'caseTaskEvent' => 'RecordRef',
        'isBillable' => 'boolean',
        'payrollItem' => 'RecordRef',
        'paidExternally' => 'boolean',
        'workplace' => 'RecordRef',
        'item' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'hours' => 'Duration',
        'price' => 'RecordRef',
        'timeType' => 'TimeBillTimeType',
        'rate' => 'float',
        'overrideRate' => 'boolean',
        'temporaryLocalJurisdiction' => 'RecordRef',
        'temporaryStateJurisdiction' => 'RecordRef',
        'memo' => 'string',
        'rejectionNote' => 'string',
        'subsidiary' => 'RecordRef',
        'supervisorApproval' => 'boolean',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'timeSheet' => 'RecordRef',
        'status' => 'string',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
