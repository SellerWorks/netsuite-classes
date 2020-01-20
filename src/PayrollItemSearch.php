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
 * PayrollItemSearch
 */
class PayrollItemSearch extends SearchRecord {
	/**
	 * @access public
	 * @var PayrollItemSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "PayrollItemSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
