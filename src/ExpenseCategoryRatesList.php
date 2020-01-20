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
 * ExpenseCategoryRatesList
 */
class ExpenseCategoryRatesList {
	/**
	 * @access public
	 * @var ExpenseCategoryRates[]
	 */
	public $expenseCategoryRates;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"expenseCategoryRates" => "ExpenseCategoryRates[]",
		"replaceAll" => "boolean",
	);
}
