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
 * ItemFulfillmentPackage
 */
class ItemFulfillmentPackage {
	/**
	 * @access public
	 * @var float
	 */
	public $packageWeight;
	/**
	 * @access public
	 * @var string
	 */
	public $packageDescr;
	/**
	 * @access public
	 * @var string
	 */
	public $packageTrackingNumber;

	static $paramtypesmap = array(
		"packageWeight" => "float",
		"packageDescr" => "string",
		"packageTrackingNumber" => "string",
	);
}
