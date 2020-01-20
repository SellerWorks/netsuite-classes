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
 * LotNumberedAssemblyItemBillOfMaterials
 */
class LotNumberedAssemblyItemBillOfMaterials {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billOfMaterials;
	/**
	 * @access public
	 * @var string
	 */
	public $currentRevision;
	/**
	 * @access public
	 * @var boolean
	 */
	public $masterDefault;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $defaultForLocationList;
	/**
	 * @access public
	 * @var string
	 */
	public $inactive;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;

	static $paramtypesmap = array(
		"billOfMaterials" => "RecordRef",
		"currentRevision" => "string",
		"masterDefault" => "boolean",
		"defaultForLocationList" => "RecordRefList",
		"inactive" => "string",
		"memo" => "string",
	);
}
