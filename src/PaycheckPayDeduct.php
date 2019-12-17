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
 * PaycheckPayDeduct
 */
class PaycheckPayDeduct {
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
	public $wageBase;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $manualEntry;

	static $paramtypesmap = array(
		"payItem" => "RecordRef",
		"line" => "integer",
		"wageBase" => "float",
		"amount" => "float",
		"manualEntry" => "boolean",
	);
}
