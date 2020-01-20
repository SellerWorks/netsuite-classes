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
 * JobPlStatement
 */
class JobPlStatement {
	/**
	 * @access public
	 * @var string
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var float
	 */
	public $revenue;
	/**
	 * @access public
	 * @var float
	 */
	public $cost;
	/**
	 * @access public
	 * @var float
	 */
	public $profit;
	/**
	 * @access public
	 * @var float
	 */
	public $margin;

	static $paramtypesmap = array(
		"costCategory" => "string",
		"revenue" => "float",
		"cost" => "float",
		"profit" => "float",
		"margin" => "float",
	);
}
