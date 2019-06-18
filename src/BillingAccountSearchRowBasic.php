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
 * BillingAccountSearchRowBasic.
 */
class BillingAccountSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $billingSchedule;
    /**
     * @var SearchColumnSelectField[]
     */
    public $cashSaleForm;
    /**
     * @var SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $customerDefault;
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
    public $externalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $frequency;
    /**
     * @var SearchColumnStringField[]
     */
    public $idNumber;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $inactive;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $invoiceForm;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastBillCycleDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastBillDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnDateField[]
     */
    public $nextBillCycleDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'billingSchedule' => 'SearchColumnSelectField[]',
        'cashSaleForm' => 'SearchColumnSelectField[]',
        'class' => 'SearchColumnSelectField[]',
        'currency' => 'SearchColumnSelectField[]',
        'customer' => 'SearchColumnSelectField[]',
        'customerDefault' => 'SearchColumnBooleanField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'department' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'frequency' => 'SearchColumnEnumSelectField[]',
        'idNumber' => 'SearchColumnStringField[]',
        'inactive' => 'SearchColumnBooleanField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'invoiceForm' => 'SearchColumnSelectField[]',
        'lastBillCycleDate' => 'SearchColumnDateField[]',
        'lastBillDate' => 'SearchColumnDateField[]',
        'location' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'nextBillCycleDate' => 'SearchColumnDateField[]',
        'startDate' => 'SearchColumnDateField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
