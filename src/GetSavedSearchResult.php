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
 * GetSavedSearchResult
 */
class GetSavedSearchResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $recordRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordRefList" => "RecordRefList",
	);
}
