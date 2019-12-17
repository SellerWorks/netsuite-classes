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
 * BomRevisionComponent
 */
class BomRevisionComponent {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
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
	public $units;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"description" => "string",
		"componentYield" => "float",
		"bomQuantity" => "float",
		"itemSource" => "ItemSource",
		"quantity" => "float",
		"units" => "RecordRef",
		"internalId" => "string",
		"customFieldList" => "CustomFieldList",
	);
}
