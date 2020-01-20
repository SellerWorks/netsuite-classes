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
 * StatusDetail
 */
class StatusDetail {
	/**
	 * @access public
	 * @var StatusDetailCodeType
	 */
	public $code;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var boolean
	 */
	public $afterSubmitFailed;
	/**
	 * @access public
	 * @var StatusDetailType
	 */
	public $type;

	static $paramtypesmap = array(
		"code" => "StatusDetailCodeType",
		"message" => "string",
		"afterSubmitFailed" => "boolean",
		"type" => "StatusDetailType",
	);
}
