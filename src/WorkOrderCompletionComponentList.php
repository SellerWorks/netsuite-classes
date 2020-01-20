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
 * WorkOrderCompletionComponentList
 */
class WorkOrderCompletionComponentList {
	/**
	 * @access public
	 * @var WorkOrderCompletionComponent[]
	 */
	public $workOrderCompletionComponent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"workOrderCompletionComponent" => "WorkOrderCompletionComponent[]",
		"replaceAll" => "boolean",
	);
}
