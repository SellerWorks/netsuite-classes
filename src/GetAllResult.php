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
 * GetAllResult
 */
class GetAllResult {
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
	 * @var RecordList
	 */
	public $recordList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordList" => "RecordList",
	);
}
