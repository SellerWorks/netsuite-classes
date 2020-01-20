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
 * BillingRates
 */
class BillingRates {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billingClass;
	/**
	 * @access public
	 * @var RateList
	 */
	public $rateList;

	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"billingClass" => "RecordRef",
		"rateList" => "RateList",
	);
}
