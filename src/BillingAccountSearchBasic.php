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
 * BillingAccountSearchBasic.
 */
class BillingAccountSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $billingSchedule;
    /**
     * @var SearchMultiSelectField
     */
    public $cashSaleForm;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchBooleanField
     */
    public $customerDefault;
    /**
     * @var SearchDateField
     */
    public $dateCreated;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $frequency;
    /**
     * @var SearchStringField
     */
    public $idNumber;
    /**
     * @var SearchBooleanField
     */
    public $inactive;
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
    public $invoiceForm;
    /**
     * @var SearchDateField
     */
    public $lastBillCycleDate;
    /**
     * @var SearchDateField
     */
    public $lastBillDate;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchDateField
     */
    public $nextBillCycleDate;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'billingSchedule' => 'SearchMultiSelectField',
        'cashSaleForm' => 'SearchMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'currency' => 'SearchMultiSelectField',
        'customer' => 'SearchMultiSelectField',
        'customerDefault' => 'SearchBooleanField',
        'dateCreated' => 'SearchDateField',
        'department' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'frequency' => 'SearchEnumMultiSelectField',
        'idNumber' => 'SearchStringField',
        'inactive' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'invoiceForm' => 'SearchMultiSelectField',
        'lastBillCycleDate' => 'SearchDateField',
        'lastBillDate' => 'SearchDateField',
        'location' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'name' => 'SearchStringField',
        'nextBillCycleDate' => 'SearchDateField',
        'startDate' => 'SearchDateField',
        'subsidiary' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
