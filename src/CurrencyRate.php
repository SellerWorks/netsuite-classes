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
 * CurrencyRate
 */
class CurrencyRate extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transactionCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"transactionCurrency" => "RecordRef",
		"exchangeRate" => "float",
		"effectiveDate" => "dateTime",
		"internalId" => "string",
	);
}
