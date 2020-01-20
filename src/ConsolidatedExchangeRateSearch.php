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
 * ConsolidatedExchangeRateSearch
 */
class ConsolidatedExchangeRateSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var SubsidiarySearchBasic
	 */
	public $fromSubsidiaryJoin;
	/**
	 * @access public
	 * @var AccountingPeriodSearchBasic
	 */
	public $periodJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchBasic
	 */
	public $toSubsidiaryJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "ConsolidatedExchangeRateSearchBasic",
		"fromSubsidiaryJoin" => "SubsidiarySearchBasic",
		"periodJoin" => "AccountingPeriodSearchBasic",
		"toSubsidiaryJoin" => "SubsidiarySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
