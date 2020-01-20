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
 * UpdateResponse
 */
class UpdateResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}
