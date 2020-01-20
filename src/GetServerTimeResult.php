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
 * GetServerTimeResult
 */
class GetServerTimeResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $serverTime;

	static $paramtypesmap = array(
		"status" => "Status",
		"serverTime" => "dateTime",
	);
}
