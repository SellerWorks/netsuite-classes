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
 * ServiceItemTaskTemplates
 */
class ServiceItemTaskTemplates {
	/**
	 * @access public
	 * @var string
	 */
	public $taskName;
	/**
	 * @access public
	 * @var integer
	 */
	public $taskStartOffset;
	/**
	 * @access public
	 * @var Duration
	 */
	public $taskDuration;

	static $paramtypesmap = array(
		"taskName" => "string",
		"taskStartOffset" => "integer",
		"taskDuration" => "Duration",
	);
}
