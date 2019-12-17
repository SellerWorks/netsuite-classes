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
 * BillingScheduleMilestone
 */
class BillingScheduleMilestone {
	/**
	 * @access public
	 * @var integer
	 */
	public $milestoneId;
	/**
	 * @access public
	 * @var float
	 */
	public $milestoneAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $milestoneTerms;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $projectTask;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $milestoneDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $milestoneCompleted;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $milestoneActualCompletionDate;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;

	static $paramtypesmap = array(
		"milestoneId" => "integer",
		"milestoneAmount" => "float",
		"milestoneTerms" => "RecordRef",
		"projectTask" => "RecordRef",
		"milestoneDate" => "dateTime",
		"milestoneCompleted" => "boolean",
		"milestoneActualCompletionDate" => "dateTime",
		"comments" => "string",
	);
}
