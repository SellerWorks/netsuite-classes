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
 * AsyncSearchRequest
 */
class AsyncSearchRequest {
	/**
	 * @access public
	 * @var SearchRecord
	 */
	public $searchRecord;

	static $paramtypesmap = array(
		"searchRecord" => "SearchRecord",
	);
}
