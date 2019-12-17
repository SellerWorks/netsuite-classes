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
 * TimeEntrySearchRowBasic.
 */
class TimeEntrySearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $approvalStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingClass;
    /**
     * @var SearchColumnStringField[]
     */
    public $billingStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $break;
    /**
     * @var SearchColumnSelectField[]
     */
    public $caseTaskEvent;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnSelectField[]
     */
    public $classNoHierarchy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var SearchColumnDateField[]
     */
    public $date;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var SearchColumnSelectField[]
     */
    public $departmentNoHierarchy;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $durationDecimal;
    /**
     * @var SearchColumnSelectField[]
     */
    public $employee;
    /**
     * @var SearchColumnDateField[]
     */
    public $endTime;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $hours;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isBillable;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isExempt;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isProductive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isUtilized;
    /**
     * @var SearchColumnStringField[]
     */
    public $item;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModified;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnSelectField[]
     */
    public $locationNoHierarchy;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnSelectField[]
     */
    public $nextApprover;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $paidExternally;
    /**
     * @var SearchColumnSelectField[]
     */
    public $payItem;
    /**
     * @var SearchColumnDateField[]
     */
    public $payrollDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rate;
    /**
     * @var SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var SearchColumnStringField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnStringField[]
     */
    public $subsidiaryNoHierarchy;
    /**
     * @var SearchColumnStringField[]
     */
    public $timeSheet;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'approvalStatus' => 'SearchColumnSelectField[]',
        'billingClass' => 'SearchColumnSelectField[]',
        'billingStatus' => 'SearchColumnStringField[]',
        'break' => 'SearchColumnStringField[]',
        'caseTaskEvent' => 'SearchColumnSelectField[]',
        'class' => 'SearchColumnSelectField[]',
        'classNoHierarchy' => 'SearchColumnSelectField[]',
        'customer' => 'SearchColumnSelectField[]',
        'date' => 'SearchColumnDateField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'department' => 'SearchColumnSelectField[]',
        'departmentNoHierarchy' => 'SearchColumnSelectField[]',
        'durationDecimal' => 'SearchColumnDoubleField[]',
        'employee' => 'SearchColumnSelectField[]',
        'endTime' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'hours' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isBillable' => 'SearchColumnBooleanField[]',
        'isExempt' => 'SearchColumnBooleanField[]',
        'isProductive' => 'SearchColumnBooleanField[]',
        'isUtilized' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnStringField[]',
        'lastModified' => 'SearchColumnDateField[]',
        'location' => 'SearchColumnSelectField[]',
        'locationNoHierarchy' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'nextApprover' => 'SearchColumnSelectField[]',
        'paidExternally' => 'SearchColumnBooleanField[]',
        'payItem' => 'SearchColumnSelectField[]',
        'payrollDate' => 'SearchColumnDateField[]',
        'rate' => 'SearchColumnDoubleField[]',
        'startTime' => 'SearchColumnDateField[]',
        'subsidiary' => 'SearchColumnStringField[]',
        'subsidiaryNoHierarchy' => 'SearchColumnStringField[]',
        'timeSheet' => 'SearchColumnStringField[]',
        'type' => 'SearchColumnEnumSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
