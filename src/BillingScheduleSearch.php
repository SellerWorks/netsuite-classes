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
 * BillingScheduleSearch
 */
class BillingScheduleSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BillingScheduleSearchBasic
	 */
	public $basic;

	static $paramtypesmap = array(
		"basic" => "BillingScheduleSearchBasic",
	);
}
