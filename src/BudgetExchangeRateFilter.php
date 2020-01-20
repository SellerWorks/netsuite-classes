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
 * BudgetExchangeRateFilter
 */
class BudgetExchangeRateFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
	);
}
