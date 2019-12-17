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
 * SearchRowList
 */
class SearchRowList {
	/**
	 * @access public
	 * @var SearchRow[]
	 */
	public $searchRow;

	static $paramtypesmap = array(
		"searchRow" => "SearchRow[]",
	);
}
