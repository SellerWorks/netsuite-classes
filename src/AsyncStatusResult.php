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
 * AsyncStatusResult
 */
class AsyncStatusResult {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;
	/**
	 * @access public
	 * @var AsyncStatusType
	 */
	public $status;
	/**
	 * @access public
	 * @var float
	 */
	public $percentCompleted;
	/**
	 * @access public
	 * @var float
	 */
	public $estRemainingDuration;

	static $paramtypesmap = array(
		"jobId" => "string",
		"status" => "AsyncStatusType",
		"percentCompleted" => "float",
		"estRemainingDuration" => "float",
	);
}
