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
 * LotNumberedAssemblyItemHierarchyVersions
 */
class LotNumberedAssemblyItemHierarchyVersions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $isIncluded;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $hierarchyVersion;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $hierarchyNode;

	static $paramtypesmap = array(
		"isIncluded" => "boolean",
		"hierarchyVersion" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"hierarchyNode" => "RecordRef",
	);
}
