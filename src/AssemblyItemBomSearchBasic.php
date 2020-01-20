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
 * AssemblyItemBomSearchBasic
 */
class AssemblyItemBomSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assembly;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billOfMaterials;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $default;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $locations;

	static $paramtypesmap = array(
		"assembly" => "SearchMultiSelectField",
		"billOfMaterials" => "SearchMultiSelectField",
		"default" => "SearchBooleanField",
		"locations" => "SearchMultiSelectField",
	);
}
