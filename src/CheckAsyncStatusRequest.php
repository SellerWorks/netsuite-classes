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
 * CheckAsyncStatusRequest
 */
class CheckAsyncStatusRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;

	static $paramtypesmap = array(
		"jobId" => "string",
	);
}
