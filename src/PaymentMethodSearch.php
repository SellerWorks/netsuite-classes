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
 * PaymentMethodSearch
 */
class PaymentMethodSearch extends SearchRecord {
	/**
	 * @access public
	 * @var PaymentMethodSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "PaymentMethodSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
