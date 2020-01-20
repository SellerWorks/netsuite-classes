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
 * ExpenseCategoryRates
 */
class ExpenseCategoryRates {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $defaultRate;

	static $paramtypesmap = array(
		"subsidiary" => "RecordRef",
		"currency" => "RecordRef",
		"defaultRate" => "float",
	);
}
