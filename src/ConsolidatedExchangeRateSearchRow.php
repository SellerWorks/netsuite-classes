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
 * ConsolidatedExchangeRateSearchRow
 */
class ConsolidatedExchangeRateSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $fromSubsidiaryJoin;
	/**
	 * @access public
	 * @var AccountingPeriodSearchRowBasic
	 */
	public $periodJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $toSubsidiaryJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "ConsolidatedExchangeRateSearchRowBasic",
		"fromSubsidiaryJoin" => "SubsidiarySearchRowBasic",
		"periodJoin" => "AccountingPeriodSearchRowBasic",
		"toSubsidiaryJoin" => "SubsidiarySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}
