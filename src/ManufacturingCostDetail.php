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
 * ManufacturingCostDetail
 */
class ManufacturingCostDetail {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var float
	 */
	public $fixedRate;
	/**
	 * @access public
	 * @var float
	 */
	public $runRate;

	static $paramtypesmap = array(
		"costCategory" => "RecordRef",
		"item" => "RecordRef",
		"fixedRate" => "float",
		"runRate" => "float",
	);
}
