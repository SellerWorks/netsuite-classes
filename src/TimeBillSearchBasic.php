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
 * TimeBillSearchBasic.
 */
class TimeBillSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var SearchBooleanField
     */
    public $approved;
    /**
     * @var SearchBooleanField
     */
    public $billable;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchDateField
     */
    public $date;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchDoubleField
     */
    public $duration;
    /**
     * @var SearchMultiSelectField
     */
    public $employee;
    /**
     * @var SearchBooleanField
     */
    public $exempt;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDateField
     */
    public $lastModified;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchBooleanField
     */
    public $paidByPayroll;
    /**
     * @var SearchBooleanField
     */
    public $paidExternally;
    /**
     * @var SearchMultiSelectField
     */
    public $payItem;
    /**
     * @var SearchBooleanField
     */
    public $productive;
    /**
     * @var SearchStringField
     */
    public $rejectionNote;
    /**
     * @var SearchBooleanField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var SearchMultiSelectField
     */
    public $temporaryStateJurisdiction;
    /**
     * @var SearchBooleanField
     */
    public $timeModified;
    /**
     * @var SearchMultiSelectField
     */
    public $timeSheet;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchBooleanField
     */
    public $utilized;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'approvalStatus' => 'SearchMultiSelectField',
        'approved' => 'SearchBooleanField',
        'billable' => 'SearchBooleanField',
        'class' => 'SearchMultiSelectField',
        'customer' => 'SearchMultiSelectField',
        'date' => 'SearchDateField',
        'dateCreated' => 'SearchDateField',
        'department' => 'SearchMultiSelectField',
        'duration' => 'SearchDoubleField',
        'employee' => 'SearchMultiSelectField',
        'exempt' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'lastModified' => 'SearchDateField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'paidByPayroll' => 'SearchBooleanField',
        'paidExternally' => 'SearchBooleanField',
        'payItem' => 'SearchMultiSelectField',
        'productive' => 'SearchBooleanField',
        'rejectionNote' => 'SearchStringField',
        'status' => 'SearchBooleanField',
        'subsidiary' => 'SearchMultiSelectField',
        'temporaryLocalJurisdiction' => 'SearchMultiSelectField',
        'temporaryStateJurisdiction' => 'SearchMultiSelectField',
        'timeModified' => 'SearchBooleanField',
        'timeSheet' => 'SearchMultiSelectField',
        'type' => 'SearchEnumMultiSelectField',
        'utilized' => 'SearchBooleanField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
