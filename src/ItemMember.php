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
 * ItemMember
 */
class ItemMember {
	/**
	 * @access public
	 * @var string
	 */
	public $memberDescr;
	/**
	 * @access public
	 * @var float
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var float
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var ItemSource
	 */
	public $itemSource;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $memberUnit;
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
	 * @var RecordRef
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var string
	 */
	public $taxcode;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $taxrate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $obsoleteDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $effectiveRevision;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $obsoleteRevision;
	/**
	 * @access public
	 * @var integer
	 */
	public $lineNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $memberKey;

	static $paramtypesmap = array(
		"memberDescr" => "string",
		"componentYield" => "float",
		"bomQuantity" => "float",
		"itemSource" => "ItemSource",
		"quantity" => "float",
		"memberUnit" => "RecordRef",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"taxSchedule" => "RecordRef",
		"taxcode" => "string",
		"item" => "RecordRef",
		"taxrate" => "float",
		"effectiveDate" => "dateTime",
		"obsoleteDate" => "dateTime",
		"effectiveRevision" => "RecordRef",
		"obsoleteRevision" => "RecordRef",
		"lineNumber" => "integer",
		"memberKey" => "string",
	);
}
