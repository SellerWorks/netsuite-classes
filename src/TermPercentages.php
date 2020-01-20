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
 * TermPercentages
 */
class TermPercentages {
	/**
	 * @access public
	 * @var float
	 */
	public $percentage;

	static $paramtypesmap = array(
		"percentage" => "float",
	);
}
