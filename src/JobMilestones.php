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
 * JobMilestones
 */
class JobMilestones {
	/**
	 * @access public
	 * @var string
	 */
	public $milestoneName;
	/**
	 * @access public
	 * @var string
	 */
	public $milestoneOrder;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $milestoneEstComplete;
	/**
	 * @access public
	 * @var boolean
	 */
	public $milestoneCompleted;
	/**
	 * @access public
	 * @var string
	 */
	public $milestoneComments;

	static $paramtypesmap = array(
		"milestoneName" => "string",
		"milestoneOrder" => "string",
		"milestoneEstComplete" => "dateTime",
		"milestoneCompleted" => "boolean",
		"milestoneComments" => "string",
	);
}
