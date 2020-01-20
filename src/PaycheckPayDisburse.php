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
 * PaycheckPayDisburse
 */
class PaycheckPayDisburse {
	/**
	 * @access public
	 * @var string
	 */
	public $method;
	/**
	 * @access public
	 * @var string
	 */
	public $bankName;
	/**
	 * @access public
	 * @var string
	 */
	public $bankAccountDecrypt;
	/**
	 * @access public
	 * @var string
	 */
	public $statusName;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"method" => "string",
		"bankName" => "string",
		"bankAccountDecrypt" => "string",
		"statusName" => "string",
		"amount" => "float",
	);
}
