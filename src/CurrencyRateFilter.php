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
 * CurrencyRateFilter
 */
class CurrencyRateFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromCurrency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"fromCurrency" => "RecordRef",
		"effectiveDate" => "dateTime",
	);
}
