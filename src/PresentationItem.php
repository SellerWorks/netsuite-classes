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
 * PresentationItem
 */
class PresentationItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var PresentationItemType
	 */
	public $itemType;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var float
	 */
	public $onlinePrice;
	/**
	 * @access public
	 * @var float
	 */
	public $basePrice;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"itemType" => "PresentationItemType",
		"description" => "string",
		"onlinePrice" => "float",
		"basePrice" => "float",
	);
}
