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
 * PaycheckPayTax
 */
class PaycheckPayTax {
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $apply;
	/**
	 * @access public
	 * @var string
	 */
	public $payTax;
	/**
	 * @access public
	 * @var integer
	 */
	public $payItem;
	/**
	 * @access public
	 * @var float
	 */
	public $taxableWageBase;
	/**
	 * @access public
	 * @var float
	 */
	public $taxedWageBase;
	/**
	 * @access public
	 * @var float
	 */
	public $reportableWageBase;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isExempt;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isResidentTax;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"line" => "integer",
		"apply" => "boolean",
		"payTax" => "string",
		"payItem" => "integer",
		"taxableWageBase" => "float",
		"taxedWageBase" => "float",
		"reportableWageBase" => "float",
		"isExempt" => "boolean",
		"isResidentTax" => "boolean",
		"amount" => "float",
	);
}
