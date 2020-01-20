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
 * Rate
 */
class Rate {
	/**
	 * @access public
	 * @var float
	 */
	public $value;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $priceLevel;

	static $paramtypesmap = array(
		"value" => "float",
		"priceLevel" => "RecordRef",
	);
}
