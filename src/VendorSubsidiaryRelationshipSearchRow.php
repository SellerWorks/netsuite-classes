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
 * VendorSubsidiaryRelationshipSearchRow
 */
class VendorSubsidiaryRelationshipSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var VendorSubsidiaryRelationshipSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "VendorSubsidiaryRelationshipSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
