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
 * CouponCodeSearchRowBasic
 */
class CouponCodeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $promotion;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $useCount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $used;

	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"dateSent" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"promotion" => "SearchColumnStringField[]",
		"recipient" => "SearchColumnStringField[]",
		"useCount" => "SearchColumnLongField[]",
		"used" => "SearchColumnBooleanField[]",
	);
}
