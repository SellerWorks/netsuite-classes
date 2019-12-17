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
 * AsyncGetListRequest
 */
class AsyncGetListRequest {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
	);
}
