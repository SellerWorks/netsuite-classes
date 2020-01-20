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
 * InitializeListResponse
 */
class InitializeListResponse {
	/**
	 * @access public
	 * @var ReadResponseList
	 */
	public $readResponseList;

	static $paramtypesmap = array(
		"readResponseList" => "ReadResponseList",
	);
}
