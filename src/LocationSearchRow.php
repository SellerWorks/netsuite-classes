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
 * LocationSearchRow
 */
class LocationSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AddressSearchRowBasic
	 */
	public $addressJoin;
	/**
	 * @access public
	 * @var AddressSearchRowBasic
	 */
	public $returnAddressJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "LocationSearchRowBasic",
		"addressJoin" => "AddressSearchRowBasic",
		"returnAddressJoin" => "AddressSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
