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
 * TimeEntrySearchBasic.
 */
class TimeEntrySearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var SearchBooleanField
     */
    public $billable;
    /**
     * @var SearchMultiSelectField
     */
    public $billingClass;
    /**
     * @var SearchBooleanField
     */
    public $billingStatus;
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
     * @var SearchBooleanField
     */
    public $isCharged;
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
     * @var SearchMultiSelectField
     */
    public $nextApprover;
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
     * @var SearchMultiSelectField
     */
    public $subsidiary;
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

    public static $paramtypesmap = array(
        'approvalStatus' => 'SearchMultiSelectField',
        'billable' => 'SearchBooleanField',
        'billingClass' => 'SearchMultiSelectField',
        'billingStatus' => 'SearchBooleanField',
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
        'isCharged' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'lastModified' => 'SearchDateField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'nextApprover' => 'SearchMultiSelectField',
        'paidByPayroll' => 'SearchBooleanField',
        'paidExternally' => 'SearchBooleanField',
        'payItem' => 'SearchMultiSelectField',
        'productive' => 'SearchBooleanField',
        'subsidiary' => 'SearchMultiSelectField',
        'type' => 'SearchEnumMultiSelectField',
        'utilized' => 'SearchBooleanField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
