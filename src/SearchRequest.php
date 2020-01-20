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
 * SearchRequest
 */
class SearchRequest {
	/**
	 * @access public
	 * @var SearchRecord
	 */
	public $searchRecord;

	static $paramtypesmap = array(
		"searchRecord" => "SearchRecord",
	);
}
