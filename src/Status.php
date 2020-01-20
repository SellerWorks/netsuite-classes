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
 * Status
 */
class Status {
	/**
	 * @access public
	 * @var StatusDetail[]
	 */
	public $statusDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSuccess;

	static $paramtypesmap = array(
		"statusDetail" => "StatusDetail[]",
		"isSuccess" => "boolean",
	);
}
