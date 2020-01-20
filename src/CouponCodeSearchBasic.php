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
 * CouponCodeSearchBasic
 */
class CouponCodeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promotion;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $useCount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $used;

	static $paramtypesmap = array(
		"code" => "SearchStringField",
		"dateSent" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"promotion" => "SearchMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"useCount" => "SearchLongField",
		"used" => "SearchBooleanField",
	);
}
