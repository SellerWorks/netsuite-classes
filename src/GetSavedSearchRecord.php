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
 * GetSavedSearchRecord
 */
class GetSavedSearchRecord {
	/**
	 * @access public
	 * @var SearchRecordType
	 */
	public $searchType;

	static $paramtypesmap = array(
		"searchType" => "SearchRecordType",
	);
}
