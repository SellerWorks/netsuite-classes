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
 * BillingAccountSearchRow
 */
class BillingAccountSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var BillingAccountSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "BillingAccountSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
