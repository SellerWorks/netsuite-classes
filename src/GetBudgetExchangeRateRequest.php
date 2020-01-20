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
 * GetBudgetExchangeRateRequest
 */
class GetBudgetExchangeRateRequest {
	/**
	 * @access public
	 * @var BudgetExchangeRateFilter
	 */
	public $budgetExchangeRateFilter;

	static $paramtypesmap = array(
		"budgetExchangeRateFilter" => "BudgetExchangeRateFilter",
	);
}
