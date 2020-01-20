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
 * ManufacturingCostDetailList
 */
class ManufacturingCostDetailList {
	/**
	 * @access public
	 * @var ManufacturingCostDetail[]
	 */
	public $manufacturingCostDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"manufacturingCostDetail" => "ManufacturingCostDetail[]",
		"replaceAll" => "boolean",
	);
}
