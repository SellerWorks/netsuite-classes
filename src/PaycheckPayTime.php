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
 * PaycheckPayTime
 */
class PaycheckPayTime {
	/**
	 * @access public
	 * @var boolean
	 */
	public $apply;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
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
	 * @var dateTime
	 */
	public $ddate;
	/**
	 * @access public
	 * @var string
	 */
	public $custJob;
	/**
	 * @access public
	 * @var string
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var float
	 */
	public $count;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"apply" => "boolean",
		"line" => "integer",
		"payItem" => "integer",
		"payItemName" => "string",
		"ddate" => "dateTime",
		"custJob" => "string",
		"serviceItem" => "string",
		"count" => "float",
		"rate" => "float",
		"amount" => "float",
	);
}
