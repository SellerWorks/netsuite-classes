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
 * BomRevisionComponentList
 */
class BomRevisionComponentList {
	/**
	 * @access public
	 * @var BomRevisionComponent[]
	 */
	public $bomRevisionComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"bomRevisionComponent" => "BomRevisionComponent[]",
		"replaceAll" => "boolean",
	);
}
