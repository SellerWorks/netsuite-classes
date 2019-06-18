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
 * TimeBillSearchRowBasic.
 */
class TimeBillSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $approvalStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $break;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
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
     * @var SearchColumnStringField[]
     */
    public $memo;
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
     * @var SearchColumnStringField[]
     */
    public $rejectionNote;
    /**
     * @var SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var SearchColumnStringField[]
     */
    public $status;
    /**
     * @var SearchColumnStringField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $supervisorApproval;
    /**
     * @var SearchColumnStringField[]
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var SearchColumnStringField[]
     */
    public $temporaryStateJurisdiction;
    /**
     * @var SearchColumnSelectField[]
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

    public static $paramtypesmap = array(
        'approvalStatus' => 'SearchColumnSelectField[]',
        'break' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnSelectField[]',
        'customer' => 'SearchColumnSelectField[]',
        'date' => 'SearchColumnDateField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'department' => 'SearchColumnSelectField[]',
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
        'memo' => 'SearchColumnStringField[]',
        'paidExternally' => 'SearchColumnBooleanField[]',
        'payItem' => 'SearchColumnSelectField[]',
        'payrollDate' => 'SearchColumnDateField[]',
        'rate' => 'SearchColumnDoubleField[]',
        'rejectionNote' => 'SearchColumnStringField[]',
        'startTime' => 'SearchColumnDateField[]',
        'status' => 'SearchColumnStringField[]',
        'subsidiary' => 'SearchColumnStringField[]',
        'supervisorApproval' => 'SearchColumnBooleanField[]',
        'temporaryLocalJurisdiction' => 'SearchColumnStringField[]',
        'temporaryStateJurisdiction' => 'SearchColumnStringField[]',
        'timeSheet' => 'SearchColumnSelectField[]',
        'type' => 'SearchColumnEnumSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
