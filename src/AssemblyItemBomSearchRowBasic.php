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
 * AssemblyItemBomSearchRowBasic
 */
class AssemblyItemBomSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assembly;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billOfMaterials;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $default;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $locations;

	static $paramtypesmap = array(
		"assembly" => "SearchColumnSelectField[]",
		"billOfMaterials" => "SearchColumnSelectField[]",
		"default" => "SearchColumnBooleanField[]",
		"locations" => "SearchColumnSelectField[]",
	);
}
