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
 * VendorSubsidiaryRelationshipSearch
 */
class VendorSubsidiaryRelationshipSearch extends SearchRecord {
	/**
	 * @access public
	 * @var VendorSubsidiaryRelationshipSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SubsidiarySearchBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "VendorSubsidiaryRelationshipSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
