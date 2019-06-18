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
 * TransferOrder.
 */
class TransferOrder extends Record
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
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var string
     */
    public $status;
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
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var TransferOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var bool
     */
    public $useItemCostAsTransferCost;
    /**
     * @var RecordRef
     */
    public $incoterm;
    /**
     * @var bool
     */
    public $firmed;
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
     * @var RecordRef
     */
    public $transferLocation;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var dateTime
     */
    public $shipDate;
    /**
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var bool
     */
    public $shipComplete;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var float
     */
    public $shippingTax2Rate;
    /**
     * @var float
     */
    public $handlingTax1Rate;
    /**
     * @var float
     */
    public $handlingTax2Rate;
    /**
     * @var RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var float
     */
    public $total;
    /**
     * @var TransferOrderItemList
     */
    public $itemList;
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
        'shippingCost' => 'float',
        'subTotal' => 'float',
        'status' => 'string',
        'shippingAddress' => 'Address',
        'shipIsResidential' => 'boolean',
        'shipAddressList' => 'RecordRef',
        'fob' => 'string',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'source' => 'string',
        'orderStatus' => 'TransferOrderOrderStatus',
        'subsidiary' => 'RecordRef',
        'employee' => 'RecordRef',
        'useItemCostAsTransferCost' => 'boolean',
        'incoterm' => 'RecordRef',
        'firmed' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'transferLocation' => 'RecordRef',
        'memo' => 'string',
        'shipDate' => 'dateTime',
        'shipMethod' => 'RecordRef',
        'trackingNumbers' => 'string',
        'linkedTrackingNumbers' => 'string',
        'shipComplete' => 'boolean',
        'altShippingCost' => 'float',
        'shippingTax1Rate' => 'float',
        'shippingTax2Rate' => 'float',
        'handlingTax1Rate' => 'float',
        'handlingTax2Rate' => 'float',
        'shippingTaxCode' => 'RecordRef',
        'handlingTaxCode' => 'RecordRef',
        'total' => 'float',
        'itemList' => 'TransferOrderItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
