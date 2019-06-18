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
 * InboundShipment.
 */
class InboundShipment extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $shipmentNumber;
    /**
     * @var string
     */
    public $externalDocumentNumber;
    /**
     * @var InboundShipmentShipmentStatus
     */
    public $shipmentStatus;
    /**
     * @var dateTime
     */
    public $expectedShippingDate;
    /**
     * @var dateTime
     */
    public $actualShippingDate;
    /**
     * @var dateTime
     */
    public $expectedDeliveryDate;
    /**
     * @var dateTime
     */
    public $actualDeliveryDate;
    /**
     * @var string
     */
    public $shipmentMemo;
    /**
     * @var string
     */
    public $vesselNumber;
    /**
     * @var string
     */
    public $billOfLading;
    /**
     * @var InboundShipmentLandedCostList
     */
    public $landedCostList;
    /**
     * @var InboundShipmentItemsList
     */
    public $itemsList;
    /**
     * @var RecordRef
     */
    public $shipmentBaseCurrency;
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

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'shipmentNumber' => 'string',
        'externalDocumentNumber' => 'string',
        'shipmentStatus' => 'InboundShipmentShipmentStatus',
        'expectedShippingDate' => 'dateTime',
        'actualShippingDate' => 'dateTime',
        'expectedDeliveryDate' => 'dateTime',
        'actualDeliveryDate' => 'dateTime',
        'shipmentMemo' => 'string',
        'vesselNumber' => 'string',
        'billOfLading' => 'string',
        'landedCostList' => 'InboundShipmentLandedCostList',
        'itemsList' => 'InboundShipmentItemsList',
        'shipmentBaseCurrency' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
