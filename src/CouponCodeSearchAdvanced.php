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
 * CouponCodeSearchAdvanced
 */
class CouponCodeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CouponCodeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CouponCodeSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;

	static $paramtypesmap = array(
		"criteria" => "CouponCodeSearch",
		"columns" => "CouponCodeSearchRow",
		"savedSearchScriptId" => "string",
		"savedSearchId" => "string",
	);
}
