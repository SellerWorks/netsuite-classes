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
 * GetAsyncResultRequest
 */
class GetAsyncResultRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"jobId" => "string",
		"pageIndex" => "integer",
	);
}
