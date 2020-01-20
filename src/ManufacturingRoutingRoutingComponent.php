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
 * ManufacturingRoutingRoutingComponent
 */
class ManufacturingRoutingRoutingComponent {
	/**
	 * @access public
	 * @var string
	 */
	public $itemName;
	/**
	 * @access public
	 * @var string
	 */
	public $revision;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var float
	 */
	public $yield;
	/**
	 * @access public
	 * @var float
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $units;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $operationDisplayText;
	/**
	 * @access public
	 * @var integer
	 */
	public $operationSequenceNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $component;
	/**
	 * @access public
	 * @var string
	 */
	public $item;

	static $paramtypesmap = array(
		"itemName" => "string",
		"revision" => "string",
		"description" => "string",
		"yield" => "float",
		"bomQuantity" => "float",
		"quantity" => "float",
		"units" => "string",
		"operationDisplayText" => "RecordRef",
		"operationSequenceNumber" => "integer",
		"component" => "string",
		"item" => "string",
	);
}
