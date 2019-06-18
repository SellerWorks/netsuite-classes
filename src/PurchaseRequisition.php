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
 * PurchaseRequisition.
 */
class PurchaseRequisition extends Record
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
    public $customForm;
    /**
     * @var string
     */
    public $source;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $taxRegNum;
    /**
     * @var bool
     */
    public $taxRegOverride;
    /**
     * @var float
     */
    public $estimatedTotal;
    /**
     * @var string
     */
    public $status;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var RecordRef
     */
    public $nextApprover;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var RecordRef
     */
    public $subsidiary;
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
     * @var float
     */
    public $total;
    /**
     * @var PurchaseRequisitionItemList
     */
    public $itemList;
    /**
     * @var PurchaseRequisitionExpenseList
     */
    public $expenseList;
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
        'customForm' => 'RecordRef',
        'source' => 'string',
        'subTotal' => 'float',
        'currencyName' => 'string',
        'exchangeRate' => 'float',
        'vatRegNum' => 'string',
        'nexus' => 'RecordRef',
        'taxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'estimatedTotal' => 'float',
        'status' => 'string',
        'currency' => 'RecordRef',
        'entity' => 'RecordRef',
        'dueDate' => 'dateTime',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'memo' => 'string',
        'approvalStatus' => 'RecordRef',
        'nextApprover' => 'RecordRef',
        'taxTotal' => 'float',
        'tax2Total' => 'float',
        'subsidiary' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'total' => 'float',
        'itemList' => 'PurchaseRequisitionItemList',
        'expenseList' => 'PurchaseRequisitionExpenseList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
