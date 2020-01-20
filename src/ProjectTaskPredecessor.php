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
 * ProjectTaskPredecessor
 */
class ProjectTaskPredecessor {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $task;
	/**
	 * @access public
	 * @var ProjectTaskPredecessorPredecessorType
	 */
	public $type;
	/**
	 * @access public
	 * @var float
	 */
	public $lagDays;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;

	static $paramtypesmap = array(
		"task" => "RecordRef",
		"type" => "ProjectTaskPredecessorPredecessorType",
		"lagDays" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
	);
}
