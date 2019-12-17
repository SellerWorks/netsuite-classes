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
 * CustomSaleItem
 */
class CustomSaleItem
{
    /**
     * @access public
     * @var RecordRef
     */
    public $item;
    /**
     * @access public
     * @var integer
     */
    public $line;
    /**
     * @access public
     * @var string
     */
    public $description;
    /**
     * @access public
     * @var float
     */
    public $amount;
    /**
     * @access public
     * @var boolean
     */
    public $isTaxable;
    /**
     * @access public
     * @var CustomFieldList
     */
    public $options;
    /**
     * @access public
     * @var boolean
     */
    public $deferRevRec;
    /**
     * @access public
     * @var float
     */
    public $quantity;
    /**
     * @access public
     * @var float
     */
    public $currentPercent;
    /**
     * @access public
     * @var RecordRef
     */
    public $units;
    /**
     * @access public
     * @var InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @access public
     * @var string
     */
    public $serialNumbers;
    /**
     * @access public
     * @var string
     */
    public $binNumbers;
    /**
     * @access public
     * @var RecordRef
     */
    public $price;
    /**
     * @access public
     * @var string
     */
    public $rate;
    /**
     * @access public
     * @var float
     */
    public $percentComplete;
    /**
     * @access public
     * @var float
     */
    public $quantityOnHand;
    /**
     * @access public
     * @var float
     */
    public $quantityAvailable;
    /**
     * @access public
     * @var float
     */
    public $quantityRemaining;
    /**
     * @access public
     * @var RecordRef
     */
    public $department;
    /**
     * @access public
     * @var string
     */
    public $licenseCode;
    /**
     * @access public
     * @var RecordRef
     */
    public $class;
    /**
     * @access public
     * @var RecordRef
     */
    public $location;
    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @access public
     * @var dateTime
     */
    public $revRecStartDate;
    /**
     * @access public
     * @var dateTime
     */
    public $revRecEndDate;
    /**
     * @access public
     * @var float
     */
    public $grossAmt;
    /**
     * @access public
     * @var ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @access public
     * @var float
     */
    public $costEstimate;
    /**
     * @access public
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @access public
     * @var boolean
     */
    public $excludeFromRateRequest;
    /**
     * @access public
     * @var RecordRef
     */
    public $catchUpPeriod;
    /**
     * @access public
     * @var string
     */
    public $giftCertFrom;
    /**
     * @access public
     * @var string
     */
    public $giftCertRecipientName;
    /**
     * @access public
     * @var string
     */
    public $giftCertRecipientEmail;
    /**
     * @access public
     * @var string
     */
    public $giftCertMessage;
    /**
     * @access public
     * @var float
     */
    public $taxAmount;
    /**
     * @access public
     * @var VsoeSopGroup
     */
    public $vsoeSopGroup;
    /**
     * @access public
     * @var boolean
     */
    public $vsoeIsEstimate;
    /**
     * @access public
     * @var float
     */
    public $vsoePrice;
    /**
     * @access public
     * @var float
     */
    public $vsoeAmount;
    /**
     * @access public
     * @var float
     */
    public $vsoeAllocation;
    /**
     * @access public
     * @var VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @access public
     * @var VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @access public
     * @var boolean
     */
    public $vsoeDelivered;
    /**
     * @access public
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "description" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "deferRevRec" => "boolean",
        "quantity" => "float",
        "currentPercent" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "percentComplete" => "float",
        "quantityOnHand" => "float",
        "quantityAvailable" => "float",
        "quantityRemaining" => "float",
        "department" => "RecordRef",
        "licenseCode" => "string",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "excludeFromRateRequest" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "taxAmount" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "customFieldList" => "CustomFieldList",
    );
}
