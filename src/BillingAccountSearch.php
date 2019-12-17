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
 * BillingAccountSearch
 */
class BillingAccountSearch extends SearchRecord {
	/**
	 * @access public
	 * @var BillingAccountSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var JobSearchBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "BillingAccountSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
