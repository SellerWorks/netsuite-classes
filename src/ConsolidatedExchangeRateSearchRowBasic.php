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
 * ConsolidatedExchangeRateSearchRowBasic
 */
class ConsolidatedExchangeRateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $averageRate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $currentRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fromCurrency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $historicalRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $periodEndDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $periodName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $periodStartDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $toCurrency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $toSubsidiary;

	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnStringField[]",
		"averageRate" => "SearchColumnStringField[]",
		"closed" => "SearchColumnBooleanField[]",
		"currentRate" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fromCurrency" => "SearchColumnStringField[]",
		"fromSubsidiary" => "SearchColumnStringField[]",
		"historicalRate" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"periodEndDate" => "SearchColumnDateField[]",
		"periodName" => "SearchColumnStringField[]",
		"periodStartDate" => "SearchColumnDateField[]",
		"toCurrency" => "SearchColumnStringField[]",
		"toSubsidiary" => "SearchColumnStringField[]",
	);
}
