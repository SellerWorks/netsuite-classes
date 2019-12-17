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
 * PaycheckPayExp
 */
class PaycheckPayExp {
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
	public $origDoc;
	/**
	 * @access public
	 * @var string
	 */
	public $transaction;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"apply" => "boolean",
		"line" => "integer",
		"origDoc" => "integer",
		"transaction" => "string",
		"amount" => "float",
	);
}
