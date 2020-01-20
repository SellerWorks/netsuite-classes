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
 * PaycheckPaySummary
 */
class PaycheckPaySummary {
	/**
	 * @access public
	 * @var string
	 */
	public $payItem;
	/**
	 * @access public
	 * @var string
	 */
	public $payItemType;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var float
	 */
	public $ytdAmount;

	static $paramtypesmap = array(
		"payItem" => "string",
		"payItemType" => "string",
		"amount" => "float",
		"ytdAmount" => "float",
	);
}
