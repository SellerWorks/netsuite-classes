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
 * PurchaseOrder.
 */
class PurchaseOrder extends Record
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
    public $nexus;
    /**
     * @var RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var bool
     */
    public $taxRegOverride;
    /**
     * @var bool
     */
    public $taxDetailsOverride;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $purchaseContract;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var bool
     */
    public $supervisorApproval;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var dateTime
     */
    public $taxPointDate;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $terms;
    /**
     * @var dateTime
     */
    public $dueDate;
    /**
     * @var string
     */
    public $otherRefNum;
    /**
     * @var float
     */
    public $availableVendorCredit;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $approvalStatus;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var RecordRef
     */
    public $nextApprover;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var bool
     */
    public $toBePrinted;
    /**
     * @var bool
     */
    public $toBeEmailed;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $toBeFaxed;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $message;
    /**
     * @var Address
     */
    public $billingAddress;
    /**
     * @var RecordRef
     */
    public $billAddressList;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $shipTo;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var Address
     */
    public $shippingAddress;
    /**
     * @var bool
     */
    public $shipIsResidential;
    /**
     * @var RecordRef
     */
    public $shipAddressList;
    /**
     * @var string
     */
    public $fob;
    /**
     * @var dateTime
     */
    public $shipDate;
    /**
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var RecordRef
     */
    public $incoterm;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var float
     */
    public $total;
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
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $intercoTransaction;
    /**
     * @var IntercoStatus
     */
    public $intercoStatus;
    /**
     * @var string
     */
    public $status;
    /**
     * @var PurchaseOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var PurchaseOrderItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var PurchaseOrderExpenseList
     */
    public $expenseList;
    /**
     * @var TaxDetailsList
     */
    public $taxDetailsList;
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
        'nexus' => 'RecordRef',
        'subsidiaryTaxRegNum' => 'RecordRef',
        'taxRegOverride' => 'boolean',
        'taxDetailsOverride' => 'boolean',
        'customForm' => 'RecordRef',
        'entity' => 'RecordRef',
        'purchaseContract' => 'RecordRef',
        'vatRegNum' => 'string',
        'employee' => 'RecordRef',
        'supervisorApproval' => 'boolean',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'entityTaxRegNum' => 'RecordRef',
        'taxPointDate' => 'dateTime',
        'createdFrom' => 'RecordRef',
        'terms' => 'RecordRef',
        'dueDate' => 'dateTime',
        'otherRefNum' => 'string',
        'availableVendorCredit' => 'float',
        'memo' => 'string',
        'approvalStatus' => 'RecordRef',
        'exchangeRate' => 'float',
        'nextApprover' => 'RecordRef',
        'source' => 'string',
        'currencyName' => 'string',
        'toBePrinted' => 'boolean',
        'toBeEmailed' => 'boolean',
        'email' => 'string',
        'toBeFaxed' => 'boolean',
        'fax' => 'string',
        'message' => 'string',
        'billingAddress' => 'Address',
        'billAddressList' => 'RecordRef',
        'currency' => 'RecordRef',
        'shipTo' => 'RecordRef',
        'subTotal' => 'float',
        'taxTotal' => 'float',
        'tax2Total' => 'float',
        'shippingAddress' => 'Address',
        'shipIsResidential' => 'boolean',
        'shipAddressList' => 'RecordRef',
        'fob' => 'string',
        'shipDate' => 'dateTime',
        'shipMethod' => 'RecordRef',
        'incoterm' => 'RecordRef',
        'trackingNumbers' => 'string',
        'linkedTrackingNumbers' => 'string',
        'total' => 'float',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'intercoTransaction' => 'RecordRef',
        'intercoStatus' => 'IntercoStatus',
        'status' => 'string',
        'orderStatus' => 'PurchaseOrderOrderStatus',
        'itemList' => 'PurchaseOrderItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'expenseList' => 'PurchaseOrderExpenseList',
        'taxDetailsList' => 'TaxDetailsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
