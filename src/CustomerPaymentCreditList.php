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
 * CustomerPaymentCreditList
 */
class CustomerPaymentCreditList {
	/**
	 * @access public
	 * @var CustomerPaymentCredit[]
	 */
	public $credit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"credit" => "CustomerPaymentCredit[]",
		"replaceAll" => "boolean",
	);
}
