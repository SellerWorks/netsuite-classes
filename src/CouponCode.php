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
 * CouponCode
 */
class CouponCode extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $promotion;
	/**
	 * @access public
	 * @var string
	 */
	public $code;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recipient;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $used;
	/**
	 * @access public
	 * @var integer
	 */
	public $useCount;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"promotion" => "RecordRef",
		"code" => "string",
		"recipient" => "RecordRef",
		"dateSent" => "dateTime",
		"used" => "boolean",
		"useCount" => "integer",
		"internalId" => "string",
		"externalId" => "string",
	);
}
