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
 * CustomerSubsidiaryRelationshipSearchRow
 */
class CustomerSubsidiaryRelationshipSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CustomerSubsidiaryRelationshipSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "CustomerSubsidiaryRelationshipSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
