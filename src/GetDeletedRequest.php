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
 * GetDeletedRequest
 */
class GetDeletedRequest {
	/**
	 * @access public
	 * @var GetDeletedFilter
	 */
	public $getDeletedFilter;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"getDeletedFilter" => "GetDeletedFilter",
		"pageIndex" => "integer",
	);
}
