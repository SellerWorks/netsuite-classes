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
 * ProjectTaskAssignee
 */
class ProjectTaskAssignee {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $resource;
	/**
	 * @access public
	 * @var float
	 */
	public $units;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var float
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var float
	 */
	public $unitCost;
	/**
	 * @access public
	 * @var float
	 */
	public $unitPrice;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var float
	 */
	public $price;

	static $paramtypesmap = array(
		"resource" => "RecordRef",
		"units" => "float",
		"serviceItem" => "RecordRef",
		"estimatedWork" => "float",
		"unitCost" => "float",
		"unitPrice" => "float",
		"cost" => "float",
		"price" => "float",
	);
}
