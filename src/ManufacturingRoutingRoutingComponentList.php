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
 * ManufacturingRoutingRoutingComponentList
 */
class ManufacturingRoutingRoutingComponentList {
	/**
	 * @access public
	 * @var ManufacturingRoutingRoutingComponent[]
	 */
	public $manufacturingRoutingRoutingComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"manufacturingRoutingRoutingComponent" => "ManufacturingRoutingRoutingComponent[]",
		"replaceAll" => "boolean",
	);
}
