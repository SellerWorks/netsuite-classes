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
 * LandedCostSummary
 */
class LandedCostSummary {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var LandedCostSource
	 */
	public $source;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;

	static $paramtypesmap = array(
		"category" => "RecordRef",
		"amount" => "float",
		"source" => "LandedCostSource",
		"transaction" => "RecordRef",
	);
}
