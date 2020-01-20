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
 * NSSoapFault
 */
class NSSoapFault {
	/**
	 * @access public
	 * @var FaultCodeType
	 */
	public $code;
	/**
	 * @access public
	 * @var string
	 */
	public $message;

	static $paramtypesmap = array(
		"code" => "FaultCodeType",
		"message" => "string",
	);
}
