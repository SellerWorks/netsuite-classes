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
 * PromotionCodeSearchAdvanced
 */
class PromotionCodeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PromotionCodeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PromotionCodeSearchRow
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
		"criteria" => "PromotionCodeSearch",
		"columns" => "PromotionCodeSearchRow",
		"savedSearchScriptId" => "string",
		"savedSearchId" => "string",
	);
}
