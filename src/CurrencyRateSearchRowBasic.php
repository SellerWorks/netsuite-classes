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
 * CurrencyRateSearchRowBasic
 */
class CurrencyRateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transactionCurrency;

	static $paramtypesmap = array(
		"baseCurrency" => "SearchColumnSelectField[]",
		"effectiveDate" => "SearchColumnDateField[]",
		"exchangeRate" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"transactionCurrency" => "SearchColumnSelectField[]",
	);
}
