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
 * UnitsTypeUomList
 */
class UnitsTypeUomList {
	/**
	 * @access public
	 * @var UnitsTypeUom[]
	 */
	public $uom;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"uom" => "UnitsTypeUom[]",
		"replaceAll" => "boolean",
	);
}
