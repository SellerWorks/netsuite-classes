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
 * TaskTimeItemList
 */
class TaskTimeItemList {
	/**
	 * @access public
	 * @var TimeItem[]
	 */
	public $timeItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"timeItem" => "TimeItem[]",
		"replaceAll" => "boolean",
	);
}
