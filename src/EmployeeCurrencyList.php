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
 * EmployeeCurrencyList
 */
class EmployeeCurrencyList {
	/**
	 * @access public
	 * @var EmployeeCurrency[]
	 */
	public $employeeCurrency;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"employeeCurrency" => "EmployeeCurrency[]",
		"replaceAll" => "boolean",
	);
}
