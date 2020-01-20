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
 * PaycheckPayDeductList
 */
class PaycheckPayDeductList {
	/**
	 * @access public
	 * @var PaycheckPayDeduct[]
	 */
	public $paycheckPayDeduct;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"paycheckPayDeduct" => "PaycheckPayDeduct[]",
		"replaceAll" => "boolean",
	);
}
