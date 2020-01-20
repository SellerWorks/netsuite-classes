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
 * SupportCaseEscalateTo
 */
class SupportCaseEscalateTo {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $escalatee;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;

	static $paramtypesmap = array(
		"escalatee" => "RecordRef",
		"email" => "string",
		"phone" => "string",
	);
}
