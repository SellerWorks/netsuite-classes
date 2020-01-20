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
 * DepositApplicationApplyList
 */
class DepositApplicationApplyList {
	/**
	 * @access public
	 * @var DepositApplicationApply[]
	 */
	public $apply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"apply" => "DepositApplicationApply[]",
		"replaceAll" => "boolean",
	);
}
