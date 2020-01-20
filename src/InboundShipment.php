<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * InboundShipment
 */
class InboundShipment extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $shipmentNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $externalDocumentNumber;
	/**
	 * @access public
	 * @var InboundShipmentShipmentStatus
	 */
	public $shipmentStatus;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedShippingDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $actualShippingDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expectedDeliveryDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $actualDeliveryDate;
	/**
	 * @access public
	 * @var string
	 */
	public $shipmentMemo;
	/**
	 * @access public
	 * @var string
	 */
	public $vesselNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $billOfLading;
	/**
	 * @access public
	 * @var InboundShipmentLandedCostList
	 */
	public $landedCostList;
	/**
	 * @access public
	 * @var InboundShipmentItemsList
	 */
	public $itemsList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $shipmentBaseCurrency;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"shipmentNumber" => "string",
		"externalDocumentNumber" => "string",
		"shipmentStatus" => "InboundShipmentShipmentStatus",
		"expectedShippingDate" => "dateTime",
		"actualShippingDate" => "dateTime",
		"expectedDeliveryDate" => "dateTime",
		"actualDeliveryDate" => "dateTime",
		"shipmentMemo" => "string",
		"vesselNumber" => "string",
		"billOfLading" => "string",
		"landedCostList" => "InboundShipmentLandedCostList",
		"itemsList" => "InboundShipmentItemsList",
		"shipmentBaseCurrency" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
