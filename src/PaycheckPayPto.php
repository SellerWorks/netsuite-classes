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
 * PaycheckPayPto
 */
class PaycheckPayPto {
	/**
	 * @access public
	 * @var integer
	 */
	public $payItem;
	/**
	 * @access public
	 * @var string
	 */
	public $payItemName;
	/**
	 * @access public
	 * @var float
	 */
	public $hoursAccrued;
	/**
	 * @access public
	 * @var float
	 */
	public $hoursUsed;
	/**
	 * @access public
	 * @var float
	 */
	public $hoursBalance;

	static $paramtypesmap = array(
		"payItem" => "integer",
		"payItemName" => "string",
		"hoursAccrued" => "float",
		"hoursUsed" => "float",
		"hoursBalance" => "float",
	);
}
