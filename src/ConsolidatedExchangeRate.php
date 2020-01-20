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
 * ConsolidatedExchangeRate
 */
class ConsolidatedExchangeRate extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $fromCurrency;
	/**
	 * @access public
	 * @var string
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $toCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $averageRate;
	/**
	 * @access public
	 * @var float
	 */
	public $currentRate;
	/**
	 * @access public
	 * @var float
	 */
	public $historicalRate;
	/**
	 * @access public
	 * @var string
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPeriodClosed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDerived;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isEliminationSubsidiary;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"postingPeriod" => "string",
		"fromSubsidiary" => "string",
		"fromCurrency" => "string",
		"toSubsidiary" => "string",
		"toCurrency" => "string",
		"averageRate" => "float",
		"currentRate" => "float",
		"historicalRate" => "float",
		"accountingBook" => "string",
		"isPeriodClosed" => "boolean",
		"isDerived" => "boolean",
		"isEliminationSubsidiary" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}
