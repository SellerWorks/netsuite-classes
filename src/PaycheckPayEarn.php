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
 * PaycheckPayEarn
 */
class PaycheckPayEarn {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payItem;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var float
	 */
	public $count;
	/**
	 * @access public
	 * @var string
	 */
	public $rate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $manualEntry;

	static $paramtypesmap = array(
		"payItem" => "RecordRef",
		"line" => "integer",
		"count" => "float",
		"rate" => "string",
		"serviceItem" => "RecordRef",
		"grossAmount" => "float",
		"manualEntry" => "boolean",
	);
}
