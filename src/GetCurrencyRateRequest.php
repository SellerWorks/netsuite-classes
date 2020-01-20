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
 * GetCurrencyRateRequest
 */
class GetCurrencyRateRequest {
	/**
	 * @access public
	 * @var CurrencyRateFilter
	 */
	public $currencyRateFilter;

	static $paramtypesmap = array(
		"currencyRateFilter" => "CurrencyRateFilter",
	);
}
