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
 * CustomPurchaseExpenseList
 */
class CustomPurchaseExpenseList {
	/**
	 * @access public
	 * @var CustomPurchaseExpense[]
	 */
	public $expense;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"expense" => "CustomPurchaseExpense[]",
		"replaceAll" => "boolean",
	);
}
